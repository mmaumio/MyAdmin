<?php

namespace App\Http\Controllers;

use App\Package;
use App\ServiceUser;
use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Redirect, \Validator, \Session;
use Illuminate\Support\Facades\Auth;

class ServiceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceuser = ServiceUser::where('owner_id', auth()->id())->get();
        return view('serviceuser.index', ['serviceusers' => $serviceuser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceusers = Package::where('owner_id', auth()->id())->get();
        return view('serviceuser.create', ['packages' => $serviceusers]);
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
            'password' => 'required|string|min:6',
        ]);

        $serviceuser = new ServiceUser;
        $serviceuser->owner_id = Auth::id();
        $serviceuser->name = $request['name'];
        $serviceuser->email = $request['email'];
        $serviceuser->password = Hash::make($request['password']);
        $serviceuser->mobilephone = $request['mobilephone'];
        $serviceuser->address_line1 = $request['address_line1'];
        $serviceuser->package_id = $request['package_id'];

        $serviceuser->save();

        $invoice = new Invoice;
        $invoice->user_id = $serviceuser->id;
        $invoice->owner_id = Auth::id();
        $invoice->package_id = $request['package_id'];
        $invoice->amount = 10;

        $invoice->save();

        Session::flash('message', 'You have successfully added user');

        return Redirect::to('serviceuser');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
