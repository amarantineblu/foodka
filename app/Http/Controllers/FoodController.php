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
    public function allFood()
    {
        $foods = Food::where('user_id','=', Auth::user()->id )->latest()->get();

        return view('all-food', compact('foods'));
    }

    public function edit($title, $id)
    {
        $food = Food::where('id', $id)->first();
        return view('edit-food', compact('food'));
    }
    public function update(Request $request, Food $food)
    {
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $filename = $request->title . time() . '.' . $ext;
            $request->file('image')->storeAs('public/foods', $filename);
            $food->image=$filename;
        }
        $food->name = $request ->name;
        $food->price = $request ->price;
        $food->description = $request->description;
        $food->save();
        return back();
    }
    public function foodContent()
    {
        $foods = Food::where('id')->get();

        return view('food-content', compact('foods'));
    }
}
