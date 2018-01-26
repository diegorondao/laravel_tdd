<?php


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD


Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/{article}', 'UsuariosController@show');
Route::post('usuarios', 'UsuariosController@store');
Route::put('usuarios/{article}', 'UsuariosController@update');
Route::delete('usuarios/{article}', 'UsuariosController@delete');


=======
Route::post('user_externo/login', 'AuthController@authenticate');
Route::post('/post', 'PostController@index')->name('post-index');

// Route::group(['middleware' => 'jwt.auth'], function () {
//     Route::get('user', 'UserController@getAuthUser');
// });
>>>>>>> jwt_add
