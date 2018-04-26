@extends('layouts.app')
    
    @section('title') Create User! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New User</h2>
		            <form action="{{ route('serviceuser.store') }}" method="post">
		            	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		                    <label for="name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		                    <label for="Email">Email</label>
		                    <input class="form-control" type="text" name="email" id="user-group" value="{{ Request::old('email') }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                            <label for="password">{{ __('Password') }}</label>

         
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
		                <div class="form-group {{ $errors->has('mobilephone') ? 'has-error' : '' }}">
		                    <label for="Mobile Phone">Mobile Phone</label>
		                    <input class="form-control" type="text" name="mobilephone" id="mobilephone" value="{{ Request::old('mobilephone') }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('address_line1') ? 'has-error' : '' }}">
		                    <label for="Address Line 1">Address Line 1</label>
		                    <input class="form-control" type="text" name="address_line1" id="address-line" value="{{ Request::old('address_line1') }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('package_id') ? 'has-error' : '' }}">
		                    <label for="Package Name">Package Name</label>
		                    <select name="package_id" id="type" class="form-control">
		                    	@foreach ($packages as $package)
		                    		<option>{{ $package['name'] }}</option>/
		                    	@endforeach
		                    </select>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection