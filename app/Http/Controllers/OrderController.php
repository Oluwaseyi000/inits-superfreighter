<?php

namespace App\Http\Controllers;

use DateTime;
use Paystack;
use App\Models\Order;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Services\FreightService;
use App\Mail\OrderPlacedMailable;
use App\Events\NewOrderPlacedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Order\NewOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::where('status',1)->orderBy('name')->get();
        return view('home', [
            'countries' => $countries
        ]);
    }

    /**
     * calculate and preview new order
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Facades\View
     */
    public function calculateOrder(NewOrderRequest $request)
    {
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
            $request->currency = 'NGN';
            $request->quantity = 1;
        } catch (\Throwable $th) {
            return redirect()->route('order.index')->with('error', 'something went wrong, probably amount has been compromised');
        }
        return $this->paywithPaystack();
    }

    public function handleGatewayCallback(){
        $paymentDetails = Paystack::getPaymentData();
        $data = $paymentDetails['data'];
        $price = $data['amount']/100; //convert back to naira
        $expected_arrival_date= new DateTime($data['metadata']['arrival_time']);

        $order = Order::create([
            'user_ip_address' => $data['customer']['email'],
            'mode_of_transport' => $data['metadata']['mode'],
            'price' => $price,
            'origin_country' => $data['metadata']['origin'],
            'destination_country' => 'Nigeria',
            'expected_arrival_date' => $expected_arrival_date,   
        ]);

        event(new NewOrderPlacedEvent($order)); 
        
        return redirect()->route('order.index')->with('message','Order Successful, mail sent');
    }
    
   

    public function adminList(){
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.order-list', [
            'orders' => $orders
        ]);
    }

    public function mapImage()
    {
       return view('image-mapper');
    }
}
