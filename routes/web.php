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
    return view('find');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('clinica', 'ClinicasController');
Route::resource('usuario', 'UsuarioController');
Route::get('/listarClinicas', 'UsuarioController@listarClinicas');
Route::get('/listarClinicas', 'HomeController@listarClinicas');
Route::get('/busca', 'SearchController@busca');
Route::get('/base', 'SearchController@index');