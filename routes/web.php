<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'CoderlyticController@index');
Route::get('/analytics/generate', 'CoderlyticController@generateAnalytics');
Route::get('/analytics/download', 'CoderlyticController@download');

//coderlytic Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('coderlytic','\App\Http\Controllers\CoderlyticController');
  Route::post('coderlytic/{id}/update','\App\Http\Controllers\CoderlyticController@update');
  Route::get('coderlytic/{id}/delete','\App\Http\Controllers\CoderlyticController@destroy');
  Route::get('coderlytic/{id}/deleteMsg','\App\Http\Controllers\CoderlyticController@DeleteMsg');
});

//analysi Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('analysi','\App\Http\Controllers\AnalysiController');
  Route::post('analysi/{id}/update','\App\Http\Controllers\AnalysiController@update');
  Route::get('analysi/{id}/delete','\App\Http\Controllers\AnalysiController@destroy');
  Route::get('analysi/{id}/deleteMsg','\App\Http\Controllers\AnalysiController@DeleteMsg');
});
