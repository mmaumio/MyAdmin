@extends('layouts.app')
    
    @section('title') Create Role! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New Role</h2>
		            <form action="{{ route('role.store') }}" method="post">

		            	<div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="value" id="nas-ip" value="{{ Request::old('value') }}"></input>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection