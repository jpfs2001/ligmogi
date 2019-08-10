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


Auth::routes();
Route::view('/ ', 'index');


Route::middleware('auth')->group(function ()
{
Route::view('/admin','admin');
Route::view('/inserir/comercio', 'inserir_comercio');
Route::post('/inserirComercio', 'AdminController@inserirComercio');
Route::get('/lista/comercios', 'AdminController@lista_comercios');
Route::get('/comercios/informacoes/{dados}', 'AdminController@comercio_informacoes');
Route::get('/adicionar/telefone/{dados}', 'AdminController@adicionar_telefone');
Route::get('/adicionar/endereco/{dados}', 'AdminController@adicionar_endereco');
Route::get('/adicionar/horario/{dados}', 'AdminController@adicionar_horario');
Route::post('/addTelefone', 'AdminController@addTelefone');
Route::post('/addEndereco', 'AdminController@addEndereco');
Route::post('/addHorario', 'AdminController@addHorario');
Route::post('/editar/comercios/{dados}', 'AdminController@editar_comercios');
Route::post('/editarComercios', 'AdminController@editarComercios');
Route::post('/editar/telefones/{dados}', 'AdminController@editar_telefones');
Route::post('/editarTelefone', 'AdminController@editarTelefone');
Route::post('/editar/enderecos/{dados}', 'AdminController@editar_enderecos');
Route::post('/editarEnderecos', 'AdminController@editarEnderecos');
Route::post('/deletar/comercios/{dados}', 'AdminController@deletar_comercios');
Route::post('/deletar/telefones/{dados}', 'AdminController@deletar_telefones');
Route::post('/deletar/enderecos/{dados}', 'AdminController@deletar_enderecos');
});