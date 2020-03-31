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


Route::post('programacio','MostrarController@mostrar');
Route::resource('tv', 'GraellaController');
Route::resource('graella', 'GraellaController');
Route::resource('programa', 'ProgramaController');
Route::resource('canals', 'CanalController');
Route::post('validar','LoginController@validar');
Route::resource('login', 'LoginController');
Route::resource('Register', 'RegisterController');
