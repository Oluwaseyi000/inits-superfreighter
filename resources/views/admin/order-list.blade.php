@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        
            <div class="col-md-2">
                @include('layouts.includes.admin-sidebar')
            </div>
            <div class="col-md-10">
                
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <td>s/n</td>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Mode</th>
                    <th scope="col">Price</th>
                    <th scope="col">Origin </th>
                    <th scope="col">Destination</th>
                    <th scope="col">Ordered On</th>
                    <th scope="col">Arrival Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                    <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$order->user_ip_address}}</td>
                    <td>{{$order->mode_of_transport}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->origin_country}}</td>
                    <td>{{$order->destination_country}}</td>
                    <td>{{$order->created_at->format('D M d, Y')}}</td>
                    <td>{{$order->expected_arrival_date}}</td>
                   
                    
                    </tr>
                        



                    @endforeach
                </tbody>
            </table>
            {{$orders->links()}}
            </div>
            </div>
    </div>


    

   
@endsection