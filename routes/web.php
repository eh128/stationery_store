<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [ListingController::class, "welcome"]);
Route::get('/listings', [ListingController::class, "index"]);
Route::get('/listings/create', [ListingController::class, "create"]);
Route::get('/listings/{id}', [ListingController::class, "show"]);

Route::post('/listings', [ListingController::class, "store"]);
Route::post('/listings/{id}', [ListingController::class, "buy"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/listings/create', [ListingController::class, "create"]);
});
