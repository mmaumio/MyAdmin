@extends('layouts.app')
    
    @section('title') Create Location! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New Location</h2>
		            <form action="{{ route('location.store') }}" method="post">

		            	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}"></input>
		                </div>

		                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
		                    <label for="Address">Address</label>
		                    <textarea class="form-control" type="text" name="address" id="address">{{ Request::old('address') }}</textarea>
		                </div>

		                <div class="form-group {{ $errors->has('map') ? 'has-error' : '' }}">
		                    <label for="Map">Map</label>
		                    <input class="form-control" type="text" name="map" id="map" value="{{ Request::old('map') }}"></input>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection