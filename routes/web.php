<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', 'FirstController@index')->name('home');

Route::get('/second', 'SecondController@index')->name('second');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
