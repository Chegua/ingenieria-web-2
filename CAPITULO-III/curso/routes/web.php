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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Usuario', 'UsuarioController@index');


Route::get('/Usuario/Form', 'UsuarioController@create');

Route::post('/Usuario/save', 'UsuarioController@save');


Route::get('/Usuario/List', 'UsuarioController@list');

Route::get('/Usuario/edit/{id}', 'UsuarioController@edit');

Route::post('/Usuario/update', 'UsuarioController@update');

Route::get('/Usuario/delete/{id}', 'UsuarioController@delete');

