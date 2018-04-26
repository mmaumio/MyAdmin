<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use \Redirect, \Validator, \Session;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::where('owner_id', auth()->id())->get();
        return view('package.index', ['packages' => $package]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required|max:120',
        ]);

        $package = new Package;
        $package->owner_id = Auth::id();
        $package->name = $request['name'];
        $package->bw_download = $request['bw_download'];
        $package->bw_upload = $request['bw_upload'];
        $package->fup_bw_download = $request['fup_bw_download'];
        $package->fup_bw_upload = $request['fup_bw_upload'];
        $package->bw_data_limit = $request['bw_data_limit'];
        $package->rate = $request['rate'];
        $package->billing_period = $request['billing_period'];
        $package->grace_period = $request['grace_period'];
        $package->nas_ids = $request['nas_ids'];

        $package->save();

        Session::flash('message', 'You have successfully added package');

        return Redirect::to('package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::where('owner_id', auth()->id())->find($id);
        return view('package.edit', ['package' => $package ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'name' => 'required|max:120',
        ]);

        $package = Package::find($id);
        $package->name = $request['name'];
        $package->bw_download = $request['bw_download'];
        $package->bw_upload = $request['bw_upload'];
        $package->fup_bw_download = $request['fup_bw_download'];
        $package->fup_bw_upload = $request['fup_bw_upload'];
        $package->bw_data_limit = $request['bw_data_limit'];
        $package->rate = $request['rate'];
        $package->billing_period = $request['billing_period'];
        $package->grace_period = $request['grace_period'];
        $package->nas_ids = $request['nas_ids'];

        $package->save();

        Session::flash('message', 'You have successfully added package');

        return Redirect::to('package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $package = Package::find($id);
            $package->delete();
            // redirect
            Session::flash('message', 'You have successfully deleted package');
            return Redirect::to('package');
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('package');
        }
    }
}
