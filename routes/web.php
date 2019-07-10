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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin', function () {
    return view('admin');
}) ->middleware('auth');


Route::get('/inserir/comercio', function () {
    return view('inserir_comercio');
}) ->middleware('auth');
Route::get('/inserirComercio', 'AdminController@inserirComercio');