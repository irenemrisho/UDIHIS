<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//Route::controller('/', 'UserController');

Route::get('/', 'UserController@getIndex');
Route::get('login', 'UserController@getIndex');
Route::get('pharmacy', 'Pharmacy@getIndex');
Route::get('admin','Admin@getIndex');
Route::get('/addUser','UserController@addUser');
Route::post('/users/store','UserController@storeUser');
Route::post('/login', 'UserController@login');
Route::get('/manage_user','Admin@manage_user');
Route::post('/manage_user','Admin@addUser');
Route::get('/logout','UserController@logout');


//Route::get('/login', function() {
//    return Redirect::to('/');
//});
//
//Route::post('/login', function() {
//

//});
