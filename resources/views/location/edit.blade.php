@extends('layouts.app')
    
    @section('title') Edit Location! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Edit Location</h2>
		            <form action="{{ route('location.update', [ 'id' => $location->id ] ) }}" method="post">
		                
		            	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="{{ $location->name }}"></input>
		                </div>

		                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
		                    <label for="Address">Address</label>
		                    <textarea class="form-control" type="text" name="address" id="address">{{ $location->address }}</textarea>
		                </div>

		                <div class="form-group {{ $errors->has('map') ? 'has-error' : '' }}">
		                    <label for="Map">Map</label>
		                    <input class="form-control" type="text" name="map" id="map" value="{{ $location->map }}"></input>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                 {{ method_field('PUT') }}
		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection