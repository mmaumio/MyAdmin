<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use \Redirect, \Validator, \Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::where('owner_id', auth()->id())->get();
        return view('location.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
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

        $location = new Location;
        $location->owner_id = Auth::id();
        $location->name = $request['name'];
        $location->address = $request['address'];
        $location->map = $request['map'];

        $location->save();

        Session::flash('message', 'You have successfully added location');

        return Redirect::to('location');
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
        $location = Location::where('owner_id', auth()->id())->find($id);
        return view('location.edit', ['location' => $location ]);
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

        $location = Location::find($id);
        $location->name = $request['name'];
        $location->address = $request['address'];
        $location->map = $request['map'];

        $location->save();

        Session::flash('message', 'You have successfully added location');

        return Redirect::to('location');
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
            $location = Location::find($id);
            $location->delete();
            // redirect
            Session::flash('message', 'You have successfully deleted location');
            return Redirect::to('location');
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('location');
        }
    }
}
