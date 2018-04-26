<?php

namespace App\Http\Controllers;

use App\Nass;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use \Redirect, \Validator, \Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NassController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nas = Nass::where('owner_id', auth()->id())->get();
        return view('nas.index', ['nass' => $nas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nas.create');
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
            'nas_ip' => 'required|max:120',
        ]);

        $nas = new Nass;
        $nas->owner_id = Auth::id();
        $nas->nas_ip = $request['nas_ip'];
        $nas->shortname = $request['shortname'];
        $nas->type = $request['type'];
        $nas->ports = $request['ports'];
        $nas->secret = $request['secret'];
        $nas->description = $request['description'];
        $nas->api_username = $request['api_username'];
        $nas->api_password = $request['api_password'];

        $nas->save();

        Session::flash('message', 'You have successfully added nas');

        return Redirect::to('nas');
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
        $nas = Nass::where('owner_id', auth()->id())->find($id);
        return view('nas.edit', ['nas' => $nas ]);
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
            'nas_ip' => 'required|max:120',
        ]);

        $nas = Nass::find($id);
        $nas->nas_ip = $request['nas_ip'];
        $nas->shortname = $request['shortname'];
        $nas->type = $request['type'];
        $nas->ports = $request['ports'];
        $nas->secret = $request['secret'];
        $nas->description = $request['description'];
        $nas->api_username = $request['api_username'];
        $nas->api_password = $request['api_password'];

        $nas->save();

        Session::flash('message', 'You have successfully added nas');

        return Redirect::to('nas');
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
            $nas = Nass::find($id);
            $nas->delete();
            // redirect
            Session::flash('message', 'You have successfully deleted item');
            return Redirect::to('nas');
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('nas');
        }
    }
}
