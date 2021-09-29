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
// Route login logout
Route::get('/login', '\App\Http\Controllers\Auth\AuthController@showLoginForm')->middleware('guest')->name('auth.login');
Route::get('/register', '\App\Http\Controllers\Auth\AuthController@showRegisterForm')->middleware('guest')->name('auth.register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
