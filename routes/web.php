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


Route::resource('users', 'UserController')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/short-url/{shortUrl}', [App\Http\Controllers\ShorturlController::class, 'redirectToOriginalUrl'])->name('redirectToOriginalUrl');
Route::get('/get-users-by-country/{countryName}', [App\Http\Controllers\UserController::class, 'getUsersByCountryName']);


Route::resource('shorturls', App\Http\Controllers\ShorturlController::class);
