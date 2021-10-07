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
Route::post('/login', '\App\Http\Controllers\Auth\AuthController@login')->middleware('guest')->name('auth.login');
Route::get('/register', '\App\Http\Controllers\Auth\AuthController@showRegisterForm')->middleware('guest')->name('auth.register');
Route::post('/register', '\App\Http\Controllers\Auth\RegisterController@insert')->name('auth.create');
Route::get('/logout', '\App\Http\Controllers\Auth\AuthController@logout')->middleware('auth')->name('auth.logout');
Route::get('/list-user', '\App\Http\Controllers\ListUserController@showPage')->middleware('auth')->name('list.user');
Route::post('/create-collaborators', '\App\Http\Controllers\CollaboratorsUserController@store')->middleware('auth')->name('collaborators.store');
Route::get('/list-coupon', '\App\Http\Controllers\CouponController@showPage')->middleware('auth')->name('coupon.list');
Route::post('/choose-coupon', '\App\Http\Controllers\CouponController@chooseCoupon')->middleware('auth')->name('coupon.choose');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
