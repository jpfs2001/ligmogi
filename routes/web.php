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

Auth::routes();
//Route::view('/ ', 'index');


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
});