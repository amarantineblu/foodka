<?php

namespace App\Http\Controllers;

use App\complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function addComplains()
    {
        return view('add_complains');
    }
    public function upload (Request $request)
    {
        $complain = new Complain();
        $complain->message = $request->message;
        $complain->user_id = Auth::user()->id;
        $complain->save();

        return back();
    }
    public function allComplain()
    {
        $complains = complain::where('user_id','=', Auth::user()->id )->latest()->get();

        return view('all-complain', compact('complains'));
    }
}
