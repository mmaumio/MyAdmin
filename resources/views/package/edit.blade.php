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
		                <div class="form-group {{ $errors->has('bw_download') ? 'has-error' : '' }}">
		                    <label for="Download">Download</label>
		                    <select class="form-control" name="bw_download" id="bw-download">
		                    	{{ generate_dropdown(50, 0.5, 'mbps') }} 
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('bw_upload') ? 'has-error' : '' }}">
		                    <label for="Upload">Upload</label>
		                    <select class="form-control" name="bw_upload" id="bw-upload">
		                    	{{ generate_dropdown(50, 0.5, 'mbps') }} 
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('bw_data_limit') ? 'has-error' : '' }}">
		                    <label for="Data Limit">Data Limit</label>
		                    <select class="form-control" name="bw_data_limit" id="bw-data-limit">
		                    	<option selected>0 Unlimited</option>
		                    	{{ generate_dropdown(100, 1, 'GB') }} 
		                    </select>
		                </div>
		                
		                <div class="form-group {{ $errors->has('fup_bw_download') ? 'has-error' : '' }}">
		                    <label for="FUP Download">FUP Download</label>
		                    <select class="form-control" name="fup_bw_download" id="fup-bw-download">
		                    	{{ generate_dropdown(50, 0.5, 'mbps') }} 
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('fup_bw_upload') ? 'has-error' : '' }}">
		                    <label for="FUP Upload">FUP Uploada</label>
		                    <select class="form-control" name="fup_bw_upload" id="fup-bw-upload">
		                    	{{ generate_dropdown(50, 0.5, 'mbps') }} 
		                    </select>
		                </div>

		                <div class="form-group {{ $errors->has('rate') ? 'has-error' : '' }}">
		                    <label for="Charge">Charge</label>
		                    <input class="form-control" type="number" name="rate" id="rate" value="{{ $package->rate }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('billing_period') ? 'has-error' : '' }}">
		                    <label for="Billing Period">Billing Period</label>
		                    <select name="billing_period" id="type" class="form-control">
		                    	<option selected>Monthly</option>
		                    	<option>Weekly</option>
		                    	<option>Daily</option>
		                    	<option>Hourly</option>
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('grace_period') ? 'has-error' : '' }}">
		                    <label for="Grace Period">Grace Period</label>
		                    <input class="form-control" type="number" name="grace_period" id="grace-period" value="{{ $package->grace_period }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('nas_ids') ? 'has-error' : '' }}">
		                    <label for="Nas">Nas</label>
		                    <select name="nas_ids" id="type" class="form-control">
		                    	<option selected>MikroTik</option>
		                    	<option>Cisco</option>
		                    	<option>Chillispot</option>
		                    	<option>Other</option>
		                    </select>
		                </div>

		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                 {{ method_field('PUT') }}
		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection