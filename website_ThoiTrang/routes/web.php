<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front end
Route::get('/', 'HomeController@index');
Route::get('/trangchu', 'HomeController@index');

// Back end
Route::get('/admin/login', 'AdminController@login_page');
