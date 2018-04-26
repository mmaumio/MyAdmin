@extends('layouts.app')
    
    @section('title') Role @endsection

    @section('content')
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="{{ URL::to('role/create') }}" class="btn btn-success">Add Role</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				            </tr>
				        </thead>
				        <tbody>
				            @if ( ! empty( $roles ) )
				                @foreach ($roles as $role)
				                <tr>
				                	<td>{{ $role->value }}</td>
				                    <td align="right">
				                    	<a href="{{ URL::to('role/' . $role->id . '/edit') }}" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="{{ URL::to('role/' . $role->id ) }}">
						                    <input type="hidden" name="_method" value="DELETE">
						                   	<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
						                    <input class="btn btn-warning" type="submit" value="Delete">
					                    </form>
				                    </td>
				                </tr>    
				                @endforeach
				            @else    
				                <tr>
				                    <td>No Results Found</td>
				                </tr>
				            @endif
				        </tbody>
				    </table>
				</div>
			</div>	       
        </div>
    @endsection