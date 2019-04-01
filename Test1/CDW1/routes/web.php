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

Route::get('/','FlightController@index')->name('index');
Route::get('/flight-list','FlightController@search')->name('flight-list');
Route::get('/detail-flight/{id}',"FlightController@getDetail")->name('detail-flight');
Route::get('/get-detail-flight',"FlightController@getDetailFlight")->name('get-detail-flight');
Route::get('/get-register','UserController@register')->name('register');
Route::post('/register','UserController@postRegister')->name('register-post');
Route::get('/login-get','UserController@getLogin')->name('login-get');
Route::post('/login-post','UserController@login_post')->name('login-post');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/edit-profile','UserController@edit_profile')->name('edit-profile');
Route::post('/edit-profile-post','UserController@edit_profile_post')->name('edit-profile-post');

