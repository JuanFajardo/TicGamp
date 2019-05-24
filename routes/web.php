<?php

Route::get('/', function () {
  if ( !isset( \Auth::user()->id ) )
    return view('auth.login');
  else
    return view('gamp');
});



//Modulo del Modulo de Trabajo
Route::resource('/Trabajo', 'TrabajoController');
Route::post('/Tic', 'TrabajoController@guardar')->name('post.tic');

//Ruta del Modulo de Prestamo
Route::resource('/Prestamo', 'PrestamoController');

//Reportes  y todo referente a exportar PDF
Route::get('/Reporte', 'ReporteController@index')->name('get.reporte');
Route::post('/Reporte', 'ReporteController@reporte')->name('post.reporte');
Route::get('/Reporte/acta/{id}', 'ReporteController@reporteActa')->name('get.reporteActa');

//Inisio de Session
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

// Administracion de Usuarios
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create', 'UsuarioController@showRegistrationForm');
Route::post('usuarios', 'UsuarioController@create')->name('usuarios');
Route::get('usuarios/{id}', 'UsuarioController@viewuser');
Route::get('usuarios/{id}/edit', 'UsuarioController@edit');
Route::patch('usuarios/{id}', 'UsuarioController@update')->name('usuario.update');
//Route::get('usuarios/info/ver', 'UsuarioController@profile');
//Route::post('usuarios/info/ver', 'UsuarioController@profileActulizar');

Auth::routes();
