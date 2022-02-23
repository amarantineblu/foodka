<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class welcomeController extends Controller
{
    public function welcome()
    {
        $foods = Food::latest()->take(2)->get();

        return view('welcome', compact('foods'));
    }
    //
}
