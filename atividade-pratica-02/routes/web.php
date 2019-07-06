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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'WelcomeController@index');
Route::get('/welcome', 'WelcomeController@index');
Route::get('/pacientes', 'PacienteController@entrar');
Route::get('/principal', 'PrincipalController@main');
Route::get('/admin', 'AdminController@entrar');

Route::resource('pacientes', 'PacienteController');
Route::resource('operador', 'OperadorController');
Route::resource('admin', 'AdminController');
Route::resource('users','UserController');
Route::resource('procedures','ProcedureController');
Route::resource('tests','TestController');
