<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get("/signin", function (){
    return view('auth');
})->name('signin');

Route::get("/signup", function (){
    return view('reg');
})->name('signup');

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::post('/signin', 'signin')->name('signin');
    Route::post('/signup', 'signup')->name('signup');
    Route::get('/logout', 'logout')->name('logout');
});
