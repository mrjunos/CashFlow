<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/home/{date}', 'HomeController@index')->name('home');