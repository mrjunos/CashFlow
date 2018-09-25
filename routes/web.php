<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/home/{date}', 'HomeController@day')->name('home/');

Route::get('/activities/create', 'ActivityController@create')->name('activities.create');