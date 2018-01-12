<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* POST */
Route::get('/post', 'PostController@index')->name('post-index');
Route::get('/post/{post}', 'PostController@show')->name('post-show');

/* COMMENT */
Route::get('/comment', 'CommentController@index')->name('comment-index');
Route::get('/comment/{post}', 'CommentController@edit')->name('comment-edit');


