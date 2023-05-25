<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('insertbook', [BookController::class, 'showForm']);
Route::post('store', [BookController::class, 'store'])->name("store");

Route::get('insertrating', [RatingController::class, 'showForm']);
Route::post('store', [RatingController::class, 'store'])->name("storerating");
