<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function addAddress()
    {
        return view('add_address');
    }
    public function upload (Request $request)
    {
        $address = new Address();
        $address->state = $request->state;
        $address->street = $request->street;
        $address->city = $request->city;
        $address->user_id = Auth::user()->id;
        $address->save();

        return back();
    }
}
