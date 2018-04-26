@extends('layouts.app')
    
    @section('title') Location @endsection

    @section('content')
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="{{ URL::to('location/create') }}" class="btn btn-success">Add Location</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Address</th>
				                <th>Map</th>
				            </tr>
				        </thead>
				        <tbody>
				            @if ( ! empty( $locations ) )
				                @foreach ($locations as $location)
				                <tr>
				                	<td>{{ $location->name }}</td>
				                	<td>{{ $location->address }}</td>
				                	<td>{{ $location->map }}</td>
				                    <td align="right">
				                    	<a href="{{ URL::to('location/' . $location->id . '/edit') }}" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="{{ URL::to('location/' . $location->id ) }}">
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