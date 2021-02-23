<?php

namespace App\Http\Controllers;

use Paystack;
use App\Models\Order;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Services\FreightService;
use App\Mail\OrderPlacedMailable;
use Illuminate\Support\Facades\Mail;
// use App\Services\FreightService;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function payStackPay(){
        
        return $this->paywithPaystack();
    }

    public function handleGatewayCallback(){
        $paymentDetails = Paystack::getPaymentData();
        $data = $paymentDetails['data'];
        $price = $data['amount']/100; //convert back to naira
        $order = Order::create([
            'user_ip_address' => $data['ip_address'],
            'mode_of_transport' => $data['metadata']['mode'],
            'price' => $price,
            'origin_country' => $data['metadata']['origin'],
            'destination_country' => 'Nigeria',
            'expected_arrival_date' => now(),
            
        ]);

        //  email notification here
             Mail::to('superfreighters@mailinator.com')->send(new OrderPlacedMailable($order));

        return redirect()->route('order.index')->with('Order Successful, mail sent');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $this->paywithPaystack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
