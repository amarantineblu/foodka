<?php

use App\Http\Controllers\welcomeController;
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

Route::get('/', 'WelcomeController@welcome') ->name ('welcome');




Route::get('/users', function () {
    return view('users');
});

Auth::routes();

Route::post('/upload-food', 'WelcomeController@welcome')->name('upload-food');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/update-profile', 'HomeController@updateProfile')->name('update-profile');

Route::get('/add-food', 'FoodController@addFood')->name('add-food');
Route::get('/all-food','FoodController@allFood')->name('all-food');
Route::post('/upload-food','FoodController@upload')->name('food.upload');
Route::get('/add-address','AddressController@addAddress')->name('add.address');
Route::get('/all-address','AddressController@allAddress')->name('all-address');

Route::post('/upload-address','AddressController@upload')->name('address.upload');

Route::get('/add-complains','ComplainController@addComplains')->name('add.complains');
Route::get('/all-complain','ComplainController@allComplain')->name('all.complain');
Route::post('/upload-complains','ComplainController@upload')->name('complain.upload');




//
