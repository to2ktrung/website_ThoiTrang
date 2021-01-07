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

Route::get('/admin', 'AdminController@admin_index');

Route::get('/logout', 'AdminController@logout_page');

Route::post('/admin/home', 'AdminController@admin_home');

// Category Product
Route::get('/ThemSP', 'CategoryProductController@add_category_product');
Route::get('/XemSP', 'CategoryProductController@view_category_product');

Route::post('/LuuSP', 'CategoryProductController@save_category_product');
Route::post('/CapNhatSP/{category_id}', 'CategoryProductController@update_category_product');

Route::get('/SuaSP/{category_id}', 'CategoryProductController@edit_category_product');
Route::get('/XoaSP/{category_id}', 'CategoryProductController@delete_category_product');
