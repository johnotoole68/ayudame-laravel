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
      return view('welcome');
  })->name('home');

  Route::post('/registro', [
    'uses' => 'UserController@enviarRegistro',
    'as' => 'registro'
  ]);

  Route::post('/ingreso', [
    'uses' => 'UserController@enviarIngreso',
    'as' => 'ingreso'
  ]);

  Route::get('/cerrarSesion', [
    'uses' => 'UserController@cerrarSesion',
    'as' => 'salida'
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

  Route::post('/editar', function(\Illuminate\Http\Request $request){
    return response()->json(['message' => $request['postId']]);
  })->name('editar');

});
