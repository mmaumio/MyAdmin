@extends('layouts.app')
    
    @section('title') Package @endsection

    @section('content')
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="{{ URL::to('package/create') }}" class="btn btn-success">Add Package</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Downlaod</th>
				                <th>Upload</th>
				                <th>Data Limit</th>
				                <th>FUP Downlaod</th>
				                <th>FUP Upload</th>
				                <th>Charge</th>
				                <th>Billing Period</th>
				                <th>Grace Period</th>
				                <th>Nas</th>
				            </tr>
				        </thead>
				        <tbody>
				            @if ( ! empty( $packages ) )
				                @foreach ($packages as $package)
				                <tr>
				                	<td>{{ $package->name }}</td>
				                	
				                    <td>{{ $package->bw_download }}</td>
				                    <td>{{ $package->bw_upload }}</td>
				                    <td>{{ $package->bw_data_limit }}</td>
				                    <td>{{ $package->fup_bw_download }}</td>
				                    <td>{{ $package->fup_bw_upload }}</td>
				                    
				                    <td>{{ $package->rate }}</td>
				                    <td>{{ $package->billing_period }}</td>
				                    <td>{{ $package->grace_period }}</td>
				                    <td>{{ $package->nas_ids }}</td>
				                    <td align="right">
				                    	<a href="{{ URL::to('package/' . $package->id . '/edit') }}" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="{{ URL::to('package/' . $package->id ) }}">
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