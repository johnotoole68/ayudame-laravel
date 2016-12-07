<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => ['web']], function() {
  Route::get('/', function () {
      return view('home');
  })->name('home');

  Route::post('/registro', [
    'uses' => 'UserController@enviarRegistro',
    'as' => 'registro'
  ]);

  Route::get('/formulario_de_registro', [
    'uses' => 'UserController@registrarse',
    'as' => 'registrarse'
  ]);

  Route::post('/ingreso', [
    'uses' => 'UserController@enviarIngreso',
    'as' => 'ingreso'
  ]);

  Route::get('/cerrarSesion', [
    'uses' => 'UserController@cerrarSesion',
    'as' => 'salida'
  ]);

  Route::get('/cuenta_de_usuario', [
    'uses' => 'UserController@cuentaDeUsuario',
    'as' => 'cuenta'
  ]);

  Route::post('/guardar_usuario', [
    'uses' => 'UserController@guardarUsuario',
    'as' => 'guardar.cambios'
  ]);

  Route::get('/imagen_de_perfil/{nombre_de_archivo}', [
    'uses' => 'UserController@mostrarImagenDePerfil',
    'as' => 'imagen_de_perfil'
  ]);

  Route::get('/muro', [
    'uses' => 'PostController@ingresarAlMuro',
    'as' => 'muro',
    'middleware' => 'auth'
    /* "auth" porque en Kernel indica que protege middleware\Authenticate\::class*/
  ]);

  Route::post('/crearPost', [
    'uses' => 'PostController@postCrearPost',
    'as' => 'post.creado',
    'middleware' => 'auth'
  ]);

  Route::get('/eliminarPosts/{post_id}', [
    'uses' => 'PostController@eliminarPosts',
    'as' => 'eliminar.posts',
    'middleware' => 'auth'
  ]);

  Route::post('/editar', [
    'uses' => 'PostController@editarPost',
    'as' => 'editar'
  ]);

  Route::post('/recomendaciones', [
    'uses' => 'PostController@hacerRecomendacion',
    'as' => 'recomendaciones'
  ]);

});
