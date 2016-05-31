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
    return view('auth.login');
});

//=========== configuracao de seguraca ================

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/auth/logout', function(){
    Auth::logout();
});

Route::get('/produtos/index', ['as' => 'produtos.index', 'uses'=>'ProdutosController@index']);

Route::get('/produtos/create', ['as' => 'produtos.create', 'uses'=>'ProdutosController@create']);
Route::post('/produtos/store', ['as' => 'produtos.store', 'uses'=>'ProdutosController@store']);
//=====================================================


Route::get('login', 'UsersController@login');

Route::group(['prefix'=> 'clientes', 'middleware'=>'auth'], function(){
    Route::get('listar', ['as' => 'clientes.listar', 'uses'=>'ClientesController@listar']);

    Route::get('inserir', 'ClientesController@index');

    //gravando OS POSTS
    Route::post('store', ['as' => 'clientes.store', 'uses'=>'ClientesController@store']);

    Route::get('edit/{id}',['as' => 'clientes.editar', 'uses'=>'ClientesController@edit']);

    Route::put('update/{id}', ['as' => 'clientes.update', 'uses'=>'ClientesController@update']);



});

Route::group(['prefix'=>'/orcamentos', 'middleware'=>'auth'], function(){

    Route::get('index', ['as'=> 'orcamentos.index', 'uses'=> 'OrcamentosController@index']);

});

Route::get('/orcamentos/listar', function () {
    return view('orcamentos.index');
});