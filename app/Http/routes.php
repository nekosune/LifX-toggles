<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lights','LightsController@index');
Route::get('/lights/{id}','LightsController@show')->where('id','[0-9a-fA-F]+');
Route::post('/lights/{id}/toggle','LightsController@toggle')->where('id','[0-9a-fA-F]+');
