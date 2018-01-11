<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* COMMENT */
Route::get('/comment', 'CommentController@index')->name('comment-index');
Route::get('/comment/{post}', 'CommentController@edit')->name('comment-edit');


