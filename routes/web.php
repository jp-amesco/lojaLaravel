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

Route::get('loja', 'LojaController@index');
Route::get('formulario', 'LojaController@formulario');
Route::post('criaUsuario', 'LojaController@criaUsuario');
Route::get('login', 'LojaController@login');
Route::get('lista', 'LojaController@lista');
Route::get('{usuario}/editar', 'LojaController@editar');
Route::patch('atualizar/{usuarioeditar}','LojaController@atualizar');
Route::delete('delete/{usuario}', 'LojaController@deletar');

