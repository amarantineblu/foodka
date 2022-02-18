<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    return view('users');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/update-profile', 'HomeController@updateProfile')->name('update-profile');

Route::get('/add-food', 'FoodController@addFood')->name('add-food');
Route::get('/all-food','HomeController@allFood')->name('all-food');
Route::post('/upload-food','FoodController@upload')->name('food.upload');
Route::get('/add-address','AddressController@addAddress')->name('add.address');

Route::post('/upload-address','AddressController@upload')->name('address.upload');

Route::get('/add-complains','ComplainController@addComplains')->name('add.complain');
Route::post('/upload-complains','ComplainController@upload')->name('complain.upload');




//
