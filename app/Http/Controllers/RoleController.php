<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use \Redirect, \Validator, \Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::where('owner_id', auth()->id())->get();
        return view('role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
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
            'value' => 'required|max:120',
        ]);

        $role = new Role;
        $role->owner_id = Auth::id();
        $role->value = $request['value'];

        $role->save();

        Session::flash('message', 'You have successfully added Role');

        return Redirect::to('role');
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
        $role = Role::where('owner_id', auth()->id())->find($id);
        return view('role.edit', ['role' => $role ]);
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
            'value' => 'required|max:120',
        ]);

        $role = Role::find($id);
        $role->value = $request['value'];

        $role->save();

        Session::flash('message', 'You have successfully added Role');

        return Redirect::to('role');
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
            $role = Role::find($id);
            $role->delete();
            // redirect
            Session::flash('message', 'You have successfully deleted role');
            return Redirect::to('role');
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('role');
        }
    }
}
