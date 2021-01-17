<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gmail_controller;
use App\Http\Controllers\Auth_controller;

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
Route::view('/index','index');
Route::view('/login','login');
Route::get('/email',[gmail_controller::class,'sendgmail']);
Route::post('/ss',[Auth_controller::class,'dangky'])->name('add.form');
Route::post('/ss2',[Auth_controller::class,'dangnhap'])->name('dn.form');
