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

Route::get('/home', '\App\Http\Controllers\Analysis_requestController@index');
Route::get('/analytics/generate', 'CoderlyticController@generateAnalytics');
Route::get('/analysis/generate/{id}', 'CoderlyticController@generateAnalytics');
Route::get('analytics/mastergenerate', 'CoderlyticController@mastergenerate');
Route::get('/analytics/download', 'CoderlyticController@download');
Route::post('/upload', 'CoderlyticController@upload');

//coderlytic Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('coderlytic','\App\Http\Controllers\CoderlyticController');
  Route::post('coderlytic/{id}/update','\App\Http\Controllers\CoderlyticController@update');
  Route::get('coderlytic/{id}/delete','\App\Http\Controllers\CoderlyticController@destroy');
  Route::get('coderlytic/{id}/generate','\App\Http\Controllers\CoderlyticController@generateAnalytics');
  Route::get('coderlytic/{id}/deleteMsg','\App\Http\Controllers\CoderlyticController@DeleteMsg');
});

//analysi Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('analysi','\App\Http\Controllers\AnalysiController');
  Route::post('analysi/{id}/update','\App\Http\Controllers\AnalysiController@update');
  Route::get('analysi/{id}/delete','\App\Http\Controllers\AnalysiController@destroy');
  Route::get('analysi/{id}/deleteMsg','\App\Http\Controllers\AnalysiController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
//analysis_request Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('analysis_request','\App\Http\Controllers\Analysis_requestController');
  Route::post('analysis_request/{id}/update','\App\Http\Controllers\Analysis_requestController@update');
  Route::get('analysis_request/{id}/delete','\App\Http\Controllers\Analysis_requestController@destroy');
  Route::get('analysis_request/{id}/deleteMsg','\App\Http\Controllers\Analysis_requestController@DeleteMsg');
});

//rank Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('rank','\App\Http\Controllers\RankController');
  Route::post('rank/{id}/update','\App\Http\Controllers\RankController@update');
  Route::get('rank/{id}/delete','\App\Http\Controllers\RankController@destroy');
  Route::get('rank/{id}/deleteMsg','\App\Http\Controllers\RankController@DeleteMsg');
});
