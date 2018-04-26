@extends('layouts.app')
    
    @section('title') Edit Nas! @endsection

    @section('content')
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Edit Nas</h2>
		            <form action="{{ route('role.update', [ 'id' => $role->id ] ) }}" method="post">
		                <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="value" id="nas-ip" value="{{ $role->value }}"></input>
		                </div>
		                <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		                 {{ method_field('PUT') }}
		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    @endsection