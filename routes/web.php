<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('confirmation', 'App\Http\Controllers\ConfirmationController');
Route::resource('notification', 'App\Http\Controllers\NotificationController');
Route::resource('lang', 'App\Http\Controllers\LanguageController');
Route::resource('guest', 'App\Http\Controllers\GuestController');

