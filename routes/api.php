<?php


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/{article}', 'UsuariosController@show');
Route::post('usuarios', 'UsuariosController@store');
Route::put('usuarios/{article}', 'UsuariosController@update');
Route::delete('usuarios/{article}', 'UsuariosController@delete');


