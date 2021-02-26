<?php

namespace App\Http\Controllers;

use Paystack;
use App\Models\Order;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Services\FreightService;
use App\Mail\OrderPlacedMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::where('status',1)->get();
        return view('home', [
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function previewOrder(Request $request)
    {
        $request->validate([
            'item_weight' => 'required|min:0.1',
            'mode' => 'required|in:air,sea',
            'country_of_origin' => 'required'
        ]);

        $freightService = new FreightService($request->item_weight, $request->mode, $request->country_of_origin);
        $freight = $freightService->calculateFreight();

        return view('preview-order', [
            'freight' => $freight
        ]);
            
    }

    /**
    *
    * @return \Paystack\paynow
    */
    public function paywithPaystack()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function payStackPay(Request $request){
        try {
            $request->amount = Crypt::decryptString($request->encrypted_amount) * 100;
        } catch (\Throwable $th) {
            return redirect()->route('order.index')->with('error', 'something went wrong, probably amount has been compromised');
        }
        
        return $this->paywithPaystack();
    }

    public function handleGatewayCallback(){
        $paymentDetails = Paystack::getPaymentData();
        $data = $paymentDetails['data'];
        $price = $data['amount']/100; //convert back to naira

        $order = Order::create([
            'user_ip_address' => $data['customer']['email'],
            'mode_of_transport' => $data['metadata']['mode'],
            'price' => $price,
            'origin_country' => $data['metadata']['origin'],
            'destination_country' => 'Nigeria',
            'expected_arrival_date' => now(),
            
        ]);

        //  email notification here
             Mail::to($data['customer']['email'])->cc('superfreighters@mailinator.com')->send(new OrderPlacedMailable($order));

        return redirect()->route('order.index')->with('message','Order Successful, mail sent');
    }
    
   

    public function adminList(){
        $orders = Order::orderBy('created_at')->paginate(10);
        return view('admin.order-list', [
            'orders' => $orders
        ]);
    }
}
