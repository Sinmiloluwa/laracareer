<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListerController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::middleware('verified')->group( function () {
    Route::get('/listings/create', [ListingController::class, 'create']);

    Route::post('/listings', [ListingController::class, 'store']);
});

Route::middleware(['verified','auth'])->prefix('lister/user')->group(function () {
    Route::get('/dashboard', [ListerController::class, 'index'])->name('dashboard');
    Route::get('/search', [ListerController::class, 'search'])->name('search');
    Route::get('/listings', [ListerController::class, 'listings'])->name('listings');
    Route::get('/edit', [ListerController::class, 'edit'])->name('edit');
    Route::post('/delete', [ListerController::class, 'delete'])->name('destroy');
    Route::post('/edite', [ListerController::class, 'store'])->name('storeNew');
    // Route::get('/applications', [ListerController::class, 'applications'])->name('applications');
});



// Route::get('/lister/user', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


