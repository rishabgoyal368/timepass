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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category','Admin\CategoryManagement@index');
Route::match(['get','post'],'/category/add','Admin\CategoryManagement@add');
Route::match(['get','post'],'/category/edit/{id}','Admin\CategoryManagement@edit');
Route::match(['get','post'],'/category/delete/{id}','Admin\CategoryManagement@delete');

Route::get('home','Admin\AdminController@index');
Route::get('manage-users','Admin\UsersController@index');
Route::any('add-user','Admin\UsersController@add');
Route::any('edit-user/{id}','Admin\UsersController@add');

Route::get('/login', function () {
    return view('login');
});
