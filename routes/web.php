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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => 
        [
            'id' => 1,
            'title' => 'Listing One',
            'Description' => 'This is the description for the first listing'
        ]
    ]);
});

Route::get('hello/{id}', fn($id) => 
    'Hello Fiyin, Your number is '. $id)
    ->where('id', '[0-9]+');
