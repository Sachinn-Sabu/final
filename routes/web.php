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
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login',["er"=>" "]);
});

Route::post('/r','App\Http\Controllers\logincontroller@store');
Route::post('/l','App\Http\Controllers\logincontroller@index');
Route::get('/details','App\Http\Controllers\logincontroller@show');
Route::get('/edit/{id}','App\Http\Controllers\logincontroller@edit');
Route::post('/up/{id}','App\Http\Controllers\logincontroller@update');
Route::get('/del/{id}','App\Http\Controllers\logincontroller@destroy');