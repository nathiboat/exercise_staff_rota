<?php

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

Route::get('/', 'RotaSlot\RotaController@index');
Route::get('/rota', 'RotaSlot\RotaController@json');


Route::get('/alpha', function () {
    return view('alpha');
});

Route::get('/beta', function () {
    return view('beta');
});