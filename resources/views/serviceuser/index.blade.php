@extends('layouts.app')
    
    @section('title') Users @endsection

    @section('content')
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="{{ URL::to('serviceuser/create') }}" class="btn btn-success">Add User</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Email</th>
				                <th>Mobile Number</th>
				                <th>Address</th>
				                <th>Package</th>
				            </tr>
				        </thead>
				        <tbody>
				            @if ( ! empty( $serviceusers ) )
				                @foreach ($serviceusers as $serviceuser)
				                <tr>
				                	<td>{{ $serviceuser->name }}</td>
				                	<td>{{ $serviceuser->email }}</td>
				                    <td>{{ $serviceuser->mobilephone }}</td>
				                    <td>{{ $serviceuser->address_line1 }}</td>
				                    <td>{{ $serviceuser->package_id }}</td>
				                    <td align="right">
				                    	<a href="{{ URL::to('serviceuser/' . $serviceuser->id . '/edit') }}" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="{{ URL::to('serviceuser/' . $serviceuser->id ) }}">
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