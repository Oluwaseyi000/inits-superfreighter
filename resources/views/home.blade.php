@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    <div class="jumbotron">
                        Guide: 
                        <ul >
                            <li>customer input the details of their order and proceed to pay with paystack</li>
                            <li>Admin setting (Top Right) help admin setup operational costs </li>
                            <li>Admin can also view all orders </li>
                            <li>Admin and customer recieve mail after each successful order</li>
                        </ul>
                    </div>
                    <form action="{{route('order.previewOrder')}}" method="POST">
                        @csrf
                         <div class="form-group">
                            <label for="item_weight">Input Item weight (in kg)</label>
                            <input type="number" name="item_weight" class="form-control form-lg" step="any" id="item_weight" placeholder="item weight" value="{{old('item_weight')}}">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMode">Select Mode of Transport</label>
                                <select id="inputMode" class="form-control" name="mode">
                                    <option selected disabled>Select Mode of Transport</option>
                                    <option value="air">By Air</option>
                                    <option value="sea">By Sea</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputOrigin">Select country of origin</label>
                                <select id="inputOrigin" class="form-control" name="country_of_origin">
                                    <option selected disabled>Select country of origin</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option> 
                                    @endforeach
                                </select>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection