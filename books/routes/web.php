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


Route::get('/fav', 'App\Http\Controllers\Favorite_post_listController@index');

Route::get('/follow', 'App\Http\Controllers\FollowController@index');

Route::get('/follower', 'App\Http\Controllers\FollowerController@index');

Route::get('/inq', 'App\Http\Controllers\InquiryController@index');

Route::get('/log', 'App\Http\Controllers\Log_inController@index');

Route::get('/his', 'App\Http\Controllers\Post_hisController@index');

Route::get('/post', 'App\Http\Controllers\PostController@index');

Route::get('/pro', 'App\Http\Controllers\ProfileController@index');

Route::get('/ser', 'App\Http\Controllers\SearchController@index');

Route::get('/ser_2', 'App\Http\Controllers\Search_2Controller@index');

Route::get('/top', 'App\Http\Controllers\TopController@index');


Route::get('/user', 'App\Http\Controllers\UserController@index');