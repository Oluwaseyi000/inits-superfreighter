@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Preview Order</div>
                <div class="card-body">
                       <table class="table table-bordered">
                           
                            <tbody>
                                 <tr>
                                    <th scope="row">Ordered On</th>
                                    <td>{{$order->created_at}}</td>
                                </tr> 
                                
                                 <tr>
                                    <th scope="row"> Arrival Time by ({{$order->mode}})
                                        <td>{{$order->expected_arrival_date->format('Y-m-d H:i:s')}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Mode of Transport</th>
                                    <td>{{$order->mode_of_transport}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>{{$order->price}}</td>
                                </tr>

                                <tr>
                                   
                                    <th scope="row">Origin Country</th>
                                    <td>{{$order->origin_country}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ordered on</th>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection