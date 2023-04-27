<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TelegramController;
use Illuminate\Http\Request;

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

Route::get('/provasingola', function () {
    echo "prova";
    $x = 3;
    $y = 4;
    echo $x + $y;
    echo "<hr>";
    echo "<h3>Ciao</h3>";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova', function () {
    return view('prova');
});

use Illuminate\Support\Facades\Route;

Route::post('/prova', function (Request $request) {
    echo "ricevuta post!";

    if ($request->isMethod('post')) {
        echo "chiamato metodo post!<br>";
    }
    $fields = $request->all();
    echo $fields['name'];

});

Route::get('/about/due', function () {
    return view('about');
});

Route::get('/neutro', [Controller::class, 'index']);

Route::controller(GreetingController::class)->group(function () {
    $say = "sayCiao";
    Route::get('/sayciao', $say);
    Route::get('/sayhello', 'sayHello');
    Route::get('/saybuonasera', 'sayBuonasera');
    Route::get('/saygoodevening/{name?}', 'sayGoodEvening');
    Route::get('/salutami/{name}', 'salutami')->where('name', '[A-Za-z]+');
    Route::get('/saluta/{nome}/{cognome}', 'saluta');
    Route::get('/login', 'show')->name('loggami');
});

/*
Route::put('showresult', function () {
    return view('showresult');
})->name('show_result');

*/

Route::get('/salutadue/{nome}/{eta}', function ($nome, $age) {
    echo "Ciao $nome e hai $age anni";
})->where(['nome' => '[a-z]+', 'eta' => '[0-9]+']);

Route::view('/sayciaovista', 'saluti.ciao', ['name' => 'prova']);

$myArray = ['film', 'cinema', 'banane'];
Route::get('/category/{xxx}', function (string $category) {
    echo "Stasera vuoi vedere qualcosa di $category";
})->whereIn('xxx', $myArray);

Route::get('/user/profile', function () {
    $name = Route::currentRouteName(); // string
    echo "ciao $name";
})->name('profile');



//default quando non trova nulla
Route::fallback(function () {
    echo "Il path che hai cercato non esiste!";
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders', 'index');
    Route::post('/store', 'store')->name('store');
    Route::put('/showresult/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(TelegramController::class)->group(function () {
    Route::get('/bot', 'index');
});