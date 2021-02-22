@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Preview Order</div>
{{-- {{dd($freight)}} --}}
                <div class="card-body">
                    <form action="{{route('paystack.pay')}}" method="POST">
                        @csrf
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
                                <tr>
                                    <th scope="row">Base fair by ({{$freight->mode}})</th>
                                    <td>{{$freight->base_fare}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">({{$freight->origin}}) flat rate</th>
                                    <td>{{$freight->country_flat_rate}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Price based on weight ({{$freight->weight}})kg  * ({{$freight->weight_price_per_kg}})per kg</th>
                                    <td>{{$freight->total_weight_price}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Custom Tax Percent({{$freight->custom_tax_percent}})% of Total Gross Price {{$freight->before_tax}}</th>
                                    <td>{{$freight->tax}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td>{{$freight->total}}</td>
                                </tr>
                                
                                
                               
                            </tbody>
                        </table>
                       
                        @include('layouts.includes.paystack')
                        <button type="button" class="btn btn-danger">Back</button>
                        <button type="submit" class="btn btn-primary">Pay</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection