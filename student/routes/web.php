<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('pdf_view');
});

Route::resource('students', 'App\Http\Controllers\StudentController');
Route::post('search', [StudentController::class, 'search']);
Route::get('getbustime', [StudentController::class, 'getbustime']);
Route::get('timetable', [StudentController::class, 'timetable']);
Route::get('sendmail', [StudentController::class, 'sendmail']);

Route::get('exportpdf', [StudentController::class, 'exportPdf'])->name('exportpdf');
Route::get('sendmailto/{id}', [StudentController::class, 'sendmailTo'])->name("sendmailto");

Route::get('sendmailto/{id}', [StudentController::class, 'sendmailTo'])->name("sendmailto");
Route::get('musa', [StudentController::class, 'musa']);
Route::get('musastudents/{id}', [StudentController::class, 'musastudents']);

