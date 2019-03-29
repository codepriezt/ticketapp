<?php

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

Route::get('/', 'PageController@index');
Route::get('/schedules','PageController@schedules');



Route::get('/register' , 'PageController@register');
Route::post('/postregister' , 'PostsController@postregister');
Route::post('/postlogin' , 'PostsController@postlogin');
