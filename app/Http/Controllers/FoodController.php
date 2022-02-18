<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function addFood()
    {
        return view('add-food');
    }
    public function upload(Request $request)
    {

        $ext = $request->file('image')->getClientOriginalExtension();
        $filename = $request->title . time() . '.' . $ext;

        $request->file('image')->storeAs('public/foods', $filename);

        $food = new Food();
        $food->name = $request->name;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->image = $filename;
        $food->user_id = Auth::user()->id;
        $food->save();

        return back();
    }
}
