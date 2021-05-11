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

Route::match(['get','post'],'/','AuthController@login');
Route::match(['get','post'],'/admin/login','AuthController@login');
Route::match(['get','post'],'/forgot-password','AuthController@forgot_password');
Route::match(['get','post'],'/set-password/{security_code}/{user_id}','AuthController@set_password');
Route::match(['get','post'],'/logout','AuthController@logout');

Route::group(['prefix'=>'admin','middleware'=>'CheckAdminAuth'],function()
{
	//------Dahboard---------------------------------------------------------------------------
	Route::get('/home','Admin\AdminController@index');

	//------Dahboard---------------------------------------------------------------------------


	//------Manage User ---------------------------------------------------------------------------
	Route::get('/manage-users','Admin\UsersController@index');
	Route::any('/add-user','Admin\UsersController@add');
	Route::any('edit-user/{id}','Admin\UsersController@add');
	Route::any('delete-user/{id}','Admin\UsersController@delete');

	//------Manage User ---------------------------------------------------------------------------

	// //------Category Management  ---------------------------------------------------------------------------
	Route::get('/category','Admin\CategoryManagement@index');
	Route::match(['get','post'],'/category/add','Admin\CategoryManagement@add');
	Route::match(['get','post'],'/category/edit/{id}','Admin\CategoryManagement@edit');
	Route::match(['get','post'],'/category/delete/{id}','Admin\CategoryManagement@delete');
	// //------Category Management  ---------------------------------------------------------------------------
	
    Route::match(['get','post'],'/reset-password','AuthController@reset_password');
    Route::match(['get','post'],'/my-profile','AuthController@my_profile');

    //-----------------Actor-----------------------------

    Route::match(['get','post'],'/member','Admin\ActorManagementController@index');
    Route::match(['get','post'],'/member/add','Admin\ActorManagementController@add');
    Route::match(['get','post'],'/member/edit/{id}','Admin\ActorManagementController@edit');
    Route::match(['get','post'],'/member/delete/{id}','Admin\ActorManagementController@delete');

    //-----------------Actor----------------------------

    //----------------Subscription --------------------
 	Route::match(['get','post'],'/subscription-list','Admin\SubscriptionController@index');
    Route::match(['get','post'],'/subscription-list/add','Admin\SubscriptionController@add');
    Route::match(['get','post'],'/subscription-list/edit/{id}','Admin\SubscriptionController@edit');
    Route::match(['get','post'],'/subscription-list/delete/{id}','Admin\SubscriptionController@delete');
    Route::match(['get','post'],'/subscription-list/validate/name','Admin\SubscriptionController@validate_name');

    //----------------Subscription --------------------
 	Route::match(['get','post'],'/subscription-list','Admin\SubscriptionController@index');
    Route::match(['get','post'],'/subscription-list/add','Admin\SubscriptionController@add');
    Route::match(['get','post'],'/subscription-list/edit/{id}','Admin\SubscriptionController@edit');
    Route::match(['get','post'],'/subscription-list/delete/{id}','Admin\SubscriptionController@delete');
    Route::match(['get','post'],'/subscription-list/validate/name','Admin\SubscriptionController@validate_name');
    
    //----------------Subscription --------------------

    //----------------Movies --------------------
 	Route::match(['get','post'],'/movie','Admin\MovieController@index');
 	Route::match(['get','post'],'/movie/add','Admin\MovieController@add');
 	Route::match(['get','post'],'/movie/edit/{id}','Admin\MovieController@edit');
 	Route::match(['get','post'],'/movie/delete/{id}','Admin\MovieController@delete');

    //----------------Movies --------------------

    //---------------Settings--------------------------

    Route::match(['get','post'],'/upload-banner','Admin\SettingController@banner');
    Route::match(['get','post'],'/app-version','Admin\SettingController@app_version');
    Route::match(['get','post'],'/payment-key','Admin\SettingController@app_key');
    //---------------Settings--------------------------

});
