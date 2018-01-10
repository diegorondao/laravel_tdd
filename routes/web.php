<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* COMMENT */
Route::get('/comment', 'CommentController@index')->name('comment-index');
