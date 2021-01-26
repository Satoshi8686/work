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


Route::get('/fav', function () {
    return view('favorite_post_list');
});

Route::get('/follow', function () {
    return view('follow');
});

Route::get('/follower', function () {
    return view('follower');
});

Route::get('/inq', function () {
    return view('inquiry');
});

Route::get('/log', function () {
    return view('log_in');
});

Route::get('/his', function () {
    return view('post_his');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/pro', function () {
    return view('profile');
});

Route::get('/ser', function () {
    return view('search');
});

Route::get('/ser_2', function () {
    return view('search_2');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/user', function () {
    return view('user');
});