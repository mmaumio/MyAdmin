@extends('layouts.app')
    
    @section('title') Edit Package! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Edit Package</h2>
		            <form action="{{ route('package.update', [ 'id' => $package->id ] ) }}" method="post">
		                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		                    <label for="name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="{{ $package->name }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('user_group') ? 'has-error' : '' }}">
		                    <label for="User Group">User Group</label>
		                    <input class="form-control" type="text" name="user_group" id="user-group" value="{{ $package->user_group }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('bw_download') ? 'has-error' : '' }}">
		                    <label for="Download">Download</label>
		                    <input class="form-control" type="text" name="bw_download" id="bw-download" value="{{ $package->bw_download }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('bw_upload') ? 'has-error' : '' }}">
		                    <label for="Upload">Upload</label>
		                    <input class="form-control" type="text" name="bw_upload" id="bw-upload" value="{{ $package->bw_upload }}"></input>
		                </div>

		                <div class="form-group {{ $errors->has('burst_bw_rate_limit') ? 'has-error' : '' }}">
		                    <label for="Rate Limit">Rate Limit</label>
		                    <input class="form-control" type="text" name="burst_bw_rate_limit" id="bw-rate-limit" value="{{ $package->burst_bw_rate_limit }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('fup_bw_download') ? 'has-error' : '' }}">
		                    <label for="FUP Download">FUP Download</label>
		                    <input class="form-control" type="text" name="fup_bw_download" id="fup-bw-download" value="{{ $package->fup_bw_download }}"></input>
		                </div>

		                <div class="form-group {{ $errors->has('bw_data_limit') ? 'has-error' : '' }}">
		                    <label for="Data Limit">Data Limit</label>
		                    <input class="form-control" type="text" name="bw_data_limit" id="bw-data-limit" value="{{ $package->bw_data_limit }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('rate') ? 'has-error' : '' }}">
		                    <label for="rate">Rate</label>
		                    <input class="form-control" type="number" name="rate" id="rate" value="{{ $package->rate }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('billing_period') ? 'has-error' : '' }}">
		                    <label for="Billing Period">Billing Period</label>
		                    <select name="billing_period" id="type" class="form-control">
		                    	<option 
		                    		@if ($package->billing_period == 'Monthly')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Monthly</option>
		                    	<option
		                    		@if ($package->billing_period == 'Weekly')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Weekly</option>
		                    	<option
		                    		@if ($package->billing_period == 'Daily')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Daily</option>
		                    	<option
		                    		@if ($package->billing_period == 'Hourly')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Hourly</option>
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('grace_period') ? 'has-error' : '' }}">
		                    <label for="Grace Period">Grace Period</label>
		                    <input class="form-control" type="number" name="grace_period" id="grace-period" value="{{ $package->grace_period }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('nas') ? 'has-error' : '' }}">
		                    <label for="Nas">Grace Period</label>
		                    <input class="form-control" type="text" name="nas" id="nas" value="{{ $package->nas }}"></input>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                 {{ method_field('PUT') }}
		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection