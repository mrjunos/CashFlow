<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home/{date}', 'HomeController@index')->name('home');