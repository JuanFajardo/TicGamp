<?php

Route::get('/', function () {
    return view('welcome');
});


Route::post('/Tic', 'TrabajoController@guardar')->name('post.tic');
Route::get('/Tic', 'TrabajoController@index')->name('get.tic');

Route::post('/Reporte', 'TrabajoController@reporte')->name('post.reporte');

//Route::post('/login', 'UserController@login');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Inisio de Session
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
//Administracion de Usuarios
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create', 'UsuarioController@showRegistrationForm');
Route::post('usuarios', 'UsuarioController@create');
Route::get('usuarios/{id}', 'UsuarioController@viewuser');
Route::get('usuarios/{id}/edit', 'UsuarioController@edit');
Route::patch('usuarios/{id}', 'UsuarioController@update');
Route::get('usuarios/info/ver', 'UsuarioController@profile');
Route::post('usuarios/info/ver', 'UsuarioController@profileActulizar');
