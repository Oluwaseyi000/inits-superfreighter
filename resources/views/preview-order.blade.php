@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Preview Order</div>
                <div class="card-body">
                    <form action="{{route('paystack.pay')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input  class="form-control" name="email" type="email" required placeholder="input your email to proceed">
                        </div>
                       <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col"> </th>
                                <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"> Arrival Time by ({{$freight->mode}})
                                    <td>{{$freight->arrival_time->format('D M d, Y')}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Base fair by ({{$freight->mode}})</th>
                                    <td>
                                        N{{number_format($freight->base_fare, 2,'.', ',')}}
                                </tr>
                                <tr>
                                    <th scope="row">({{$freight->origin}}) flat rate</th>
                                    <td>N{{number_format($freight->country_flat_rate, 2,'.', ',')}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Price based on weight ({{$freight->weight}})kg  * ({{$freight->weight_price_per_kg}})per kg</th>
                                    <td> N{{number_format($freight->total_weight_price, 2,'.', ',')}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Custom Tax Percent({{$freight->custom_tax_percent}})% of Total Gross Price ({{$freight->before_tax}})</th>
                                    <td> N{{number_format($freight->tax, 2,'.', ',')}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td> N{{number_format($freight->total, 2,'.', ',')}}</td>
                                </tr>
                                                               
                            </tbody>
                        </table>
                       
                        @include('layouts.includes.paystack')
                        <a  href="{{route('order.index')}}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Pay</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection