<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|  - DEFINE O
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste/{nome}', 'TesteController@index');

Route::get('clientes', 'ClientesController@index');
Route::get('clientes/listar', 'ClientesController@listar');

Route::get('login', 'UsersController@login');
