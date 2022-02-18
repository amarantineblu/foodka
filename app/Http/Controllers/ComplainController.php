<?php

namespace App\Http\Controllers;

use App\complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function addComplains()
    {
        return view('add_complain');
    }
    public function upload (Request $request)
    {
        $complain = new complain();
        $complain->message = $request->message;
        $complain->user_id = Auth::user()->id;
        $complain->save();

        return back();
    }
}
