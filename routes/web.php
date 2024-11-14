<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\HomeController@index');
Route::get('/users', '\App\Http\Controllers\UserController@index');
Route::get('/mahasiswa', '\App\Http\Controllers\MahasiswaController@index');