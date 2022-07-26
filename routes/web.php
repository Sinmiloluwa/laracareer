<?php

use App\Models\Listing;
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
    $listings = Listing::all();
    return view('listings', compact('listings'));
});

Route::get('hello/{id}', fn($id) => 
    'Hello Fiyin, Your number is '. $id)
    ->where('id', '[0-9]+');

Route::get('/listing/{id}', function($id) {
    $listing = Listing::where('id',$id)->get();
    return view('listing',compact('listing'));
});