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
Route::get('/home', "AuthController@Home")->Name('Home');
Route::get('/login', "AuthController@login")->Name('login');

Route::get('/register', "AuthController@register")->Name('register');
Route::post('/register/store', "AuthController@SubmitRegister")->Name('SubmitRegister');
Route::post('/login/verify', "AuthController@LoginVerify")->Name('LoginVerify');
Route::get('/logout', "AuthController@Logout")->Name('Logout');

Route::get('/room', "AuthController@room")->Name('room');
Route::get('/payment', "AuthController@payment")->Name('payment');
Route::get('/cat', "AuthController@cat")->Name('cat');
Route::get('/shower', "AuthController@shower")->Name('shower');
Route::get('/adminhome', "AuthController@adminhome")->Name('adminhome');
Route::get('/dayreport', "AuthController@dayreport")->Name('dayreport');
Route::get('/profile', "AuthController@profile")->Name('profile');
Route::get('/adminprofile', "AuthController@adminprofile")->Name('adminprofile');
Route::get('/monthreport', "AuthController@monthreport")->Name('monthreport');
Route::get('/yearreport', "AuthController@yearreport")->Name('yearreport');
Route::post('/profile/store', "AuthController@SubmitProfileEdit")->Name('SubmitProfileEdit');
Route::post('/profile', "AuthController@SubmitProfileEditPassword")->Name('SubmitProfileEditPassword');

Route::get('/admineditroom', "AuthController@admineditroom")->Name('admineditroom');
Route::post('/admineditroom/store', "AuthController@SubmitRoomEdit")->Name('SubmitRoomEdit');
Route::post('/admineditroom/delete', "AuthController@SubmitRoomDelete")->Name('SubmitRoomDelete');
Route::post('/cat/store', "AuthController@SubmitCat")->Name('SubmitCat');
Route::post('/cat/delete', "AuthController@SubmitCatDelete")->Name('SubmitCatDelete');
Route::get('/cate/store', "AuthController@SubmitCatEdit")->Name('SubmitCatEdit');



