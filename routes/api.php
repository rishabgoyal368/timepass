<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'ApiController@user_registration');
Route::post('/login', 'ApiController@user_login');
Route::post('/logout', 'ApiController@logout');
Route::post('/forgot-password', 'ApiController@forgot_password');
Route::post('/reset-password', 'ApiController@reset_password');
Route::post('/get-profile', 'ApiController@profile');
Route::post('/update-profile', 'ApiController@updateProfile');


//------------movie-listing-----------------
Route::get('/get-movie-list', 'Api\MovieController@get_movies');
Route::get('/movie-list', 'Api\MovieController@index');
Route::get('/trending-movie-list', 'Api\MovieController@trending_movie_list');
Route::get('/upcomming-movie-list', 'Api\MovieController@upcomming_list');
Route::get('/subscription-list', 'Api\SubscriptionController@index');
Route::get('/get-web_series_list', 'Api\MovieController@getWebSeries');
Route::get('/get-serials-list', 'Api\MovieController@getSerials');
Route::get('/get-documentary-list', 'Api\MovieController@getDocumentory');
Route::get('/get-chilling-list', 'Api\MovieController@getChilling');


Route::post('add-watch-history', 'Api\MovieController@addWatchHistory');
Route::get('watchhistory', 'Api\MovieController@watch_history');
Route::post('addwatchhistory', 'Api\MovieController@add_history');
Route::post('delete-all-watchhistory', 'Api\MovieController@watchistorydelete');
Route::post('delete-watchhistory', 'Api\MovieController@delete_history');
