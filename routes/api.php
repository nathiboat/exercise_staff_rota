<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/rotas', 'Api\RotaSlotController@index');
Route::get('/rotas/{id}', 'Api\RotaSlotController@show');
Route::get('/rotas/{id}/edit', 'Api\RotaSlotController@edit');
Route::patch('/rotas/{id}', 'Api\RotaSlotController@update');
Route::get('/rotas/create', 'Api\RotaSlotController@create');
Route::delete('/rotas/{id}', 'Api\RotaSlotController@destroy');
