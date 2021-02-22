@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Preview Order</div>
{{-- {{dd($freight)}} --}}
                <div class="card-body">
                       <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col"> </th>
                                <th scope="col">Price</th>
                                {{-- <th scope="col">Last</th>
                                <th scope="col">Handle</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{$order->id}}
                                {{-- {{dd($order)}} --}}
                                -- <tr>
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
                                <tr>
                                    <th scope="row">Expected Arrival Date</th>
                                    <td>{{$order->expected_arrival_date}}</td>
                                </tr> 
                                
                                
                               
                            </tbody>
                        </table>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection