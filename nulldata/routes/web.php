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

Route::get('/registrapersona', 'RegistrapersonaController@index');
Route::post('/registrapersona', 'RegistrapersonaController@index');
Route::get('/success', 'RegistrapersonaController@success');
Route::post('/consultacp', 'RegistrapersonaController@consultacp');

Route::get('/home', 'HomeController@index');
Route::get('/personas', 'HomeController@personas');
Route::get('/personas/ver/{persona_id}', 'HomeController@verpersona');
