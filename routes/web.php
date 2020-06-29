<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts-create', 'PostController@create')->name('posts.create');
Route::post('/posts-store', 'PostController@store')->name('posts.store');
Route::get('/posts-show/{post}', 'PostController@show')->name('posts.show');
Route::get('/posts-edit/{post}', 'PostController@edit')->name('posts.edit');
Route::put('/posts-update/{post}', 'PostController@update')->name('posts.update');
Route::delete('/posts-destroy/{post}', 'PostController@destroy')->name('posts.destroy');