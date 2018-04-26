<?php

namespace App\Http\Controllers;

use App\Ownerinfo;
use Illuminate\Support\Facades\Auth;
use \Redirect, \Validator, \Session;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {   
        $profile = Ownerinfo::where('owner_id', auth()->id())->first();
        return view('profile', ['profile' => $profile]);
    }

    public function update(Request $request)
    { 
        /*$this->validate(request(), [
            
        ]); */

        $ownerinfo = new Ownerinfo;
        $ownerinfo->owner_id = auth()->id(); 
        $ownerinfo->company = $request['company'];
        $ownerinfo->email = $request['email'];
        $ownerinfo->phone = $request['phone'];
        $ownerinfo->address_line1 = $request['address_line1'];
        $ownerinfo->address_line2 = $request['address_line2'];
        $ownerinfo->city = $request['city'];
        $ownerinfo->state = $request['state'];
        $ownerinfo->zip = $request['zip'];
        $ownerinfo->country = $request['country'];

        $ownerinfo->save();

        return Redirect::to('profile');
    }
    
}
