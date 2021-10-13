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

Route::get('/','ApiController@listApi');
Route::get('/signup', 'UserController@signup');
Route::get('/login', 'UserController@login');
Route::post('/signup','UserController@saveUser');
Route::get('/{uuid}','DetailsController@viewDetails');