@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('order.previewOrder')}} " method="POST">
                        @csrf
                         <div class="form-group">
                            <label for="inputAddress">Input Item weight (in kg)</label>
                            <input type="number" name="item_weight" class="form-control form-lg" id="inputAddress" placeholder="item weight">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Select Mode of Transport</label>
                                <select id="inputState" class="form-control" name="mode">
                                    <option selected disabled>Select Mode of Transport</option>
                                    <option value="air">By Air</option>
                                    <option value="sea">By Sea</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputState">Select country of origin</label>
                                <select id="inputState" class="form-control" name="country_of_origin">
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