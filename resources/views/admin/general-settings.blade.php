@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        
            <div class="col-md-2">
            sd  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolor, repellat ex amet inventore doloremque. Quae libero doloribus, minus temporibus eius fugiat perferendis ullam, necessitatibus itaque minima suscipit tenetur cumque?
            </div>
            <div class="col-md-10">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Create General Settings</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#countryModal" >Country Settings</button>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <td>s/n</td>
                    <th scope="col">Setting Keys</th>
                    <th scope="col">Setting Value</th>
                    <th scope="col">Setting Description</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generalSettings as $key => $setting)
                    <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$setting->settings_key}}</td>
                    <td>{{$setting->settings_value}}</td>
                    <td>{{$setting->description}}</td>
                    <td></td>
                    
                    </tr>
                        
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
    </div>


    


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('admin.general-settings.store')}}" method="POST">
        @csrf
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New General Settings </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- <form action="{{route('admin.general-settings.store')}}" method="POST"> --}}
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Setting Key*</label>
            <input type="text" name="settings_key" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Setting Value*</label>
            <input type="text" name="settings_value" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Setting Description:</label>
            <textarea class="form-control"  name="description" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary">Create</button>
        {{-- <input type="submit"  class="btn btn-primary" value="Create"> --}}
      </div>

    {{-- </form> --}}
    </div>
  </div>
</form>
</div>


<div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('admin.flat-rate')}}" method="POST">
        @csrf
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Outgoing Packages Flat Rate </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form action="{{route('admin.general-settings.store')}}" method="POST"> --}}
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Country of Origin*</label>
                    <select name="country_name" id="" class="form-control">
                        @foreach ($countries as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="settings_key" class="form-control" id="recipient-name"> --}}
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Outgoing Packages Flat Rate</label>
                    <input type="text" name="settings_value" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Note:</label>
                    <textarea class="form-control"  name="description" id="message-text"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-primary">Create</button>
                {{-- <input type="submit"  class="btn btn-primary" value="Create"> --}}
            </div>

            {{-- </form> --}}
            </div>
        </div>
    </form>
</div>
   
@endsection