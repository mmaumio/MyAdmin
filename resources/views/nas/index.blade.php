@extends('layouts.app')
    
    @section('title') Nas @endsection

    @section('content')
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="{{ URL::to('nass/create') }}" class="btn btn-success">Add Nas</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>IP</th>
				                <th>Short Name</th>
				                <th>Type</th>
				                <th>Ports</th>
				                <th>Secret</th>
				                <th>Description</th>
				                <th>API Username</th>
				                <th>API Password</th>
				            </tr>
				        </thead>
				        <tbody>
				            @if ( ! empty( $nass ) )
				                @foreach ($nass as $nas)
				                <tr>
				                	<td>{{ $nas->nas_ip }}</td>
				                    <td>{{ $nas->shortname }}</td>
				                    <td>{{ $nas->type }}</td>
				                    <td>{{ $nas->ports }}</td>
				                    <td>{{ $nas->secret }}</td>
				                    <td>{{ $nas->description }}</td>
				                    <td>{{ $nas->api_username }}</td>
				                    <td>{{ $nas->api_password }}</td>
				                    <td align="right">
				                    	<a href="{{ URL::to('nas/' . $nas->id . '/edit') }}" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="{{ URL::to('nas/' . $nas->id ) }}">
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