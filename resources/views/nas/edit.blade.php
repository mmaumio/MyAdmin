@extends('layouts.app')
    
    @section('title') Edit Nas! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Edit Nas</h2>
		            <form action="{{ route('nass.update', [ 'id' => $nas->id ] ) }}" method="post">
		                <div class="form-group {{ $errors->has('nasip') ? 'has-error' : '' }}">
		                    <label for="nasip">IP</label>
		                    <input class="form-control" type="text" name="nas_ip" id="nasip" value="{{ $nas->nas_ip }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('shortname') ? 'has-error' : '' }}">
		                    <label for="Short Name">Short Name</label>
		                    <input class="form-control" type="text" name="shortname" id="shortname" value="{{ $nas->shortname  }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
		                    <label for="type">Type</label>
		                    <select name="type" id="type" class="form-control">
		                    	<option 
		                    		@if ($nas->type == 'MikroTik')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	 >MikroTik</option>
		                    	<option
		                    		@if ($nas->type == 'Cisco')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Cisco</option>
		                    	<option
		                    		@if ($nas->type == 'Chillispot')
		                    	 		{{ __('selected') }}
		                    	 	@endif
		                    	>Chillispot</option>
		                    </select>
		                </div>
		                <div class="form-group {{ $errors->has('ports') ? 'has-error' : '' }}">
		                    <label for="ports">Ports</label>
		                    <input class="form-control" type="text" name="ports" id="ports" value="{{ $nas->ports }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('secret') ? 'has-error' : '' }}">
		                    <label for="secret">Secret</label>
		                    <input class="form-control" type="text" name="secret" id="secret" value="{{ $nas->secret }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
		                	<label for="Description">Description</label>
		                    <textarea class="form-control" type="text" name="description" id="description">
		                    	{{ $nas->description }}
		                    </textarea>
		                </div>
		                <div class="form-group {{ $errors->has('api_username') ? 'has-error' : '' }}">
		                    <label for="API Username">API Username</label>
		                    <input class="form-control" type="text" name="api_username" id="api-username" value="{{ $nas->api_username }}"></input>
		                </div>
		                <div class="form-group {{ $errors->has('api_password') ? 'has-error' : '' }}">
		                    <label for="API Password">API Password</label>
		                    <input class="form-control" type="text" name="api_password" id="api-password" value="{{ $nas->api_password }}"></input>
		                </div>
		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                 {{ method_field('PUT') }}
		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection