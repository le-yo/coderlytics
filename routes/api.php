<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::group(['middleware' => 'auth:api'], function () {

    // Voters
    Route::group(['prefix' => 'TechAnalysis'], function () {
        Route::post('request', ['as' => 'techanalysis.request', 'uses' => 'Api\TechAnalysisController@request']);
        Route::get('testJob', ['as' => 'techanalysis.testJob', 'uses' => 'Api\TechAnalysisController@testJob']);
        Route::get('voted', ['as' => 'voters.voted', 'uses' => 'Api\VotersApiController@listVotersWhoHaveVoted']);
        Route::get('not-voted', ['as' => 'voters.not-voted', 'uses' => 'Api\VotersApiController@listVotersWhoHaveNotVoted']);
        Route::post('mark-voted', ['as' => 'voters.mark-voted', 'uses' => 'Api\VotersApiController@markAsVoted']);
        Route::post('send-reminder', ['as' => 'voters.send-reminder', 'uses' => 'Api\VotersApiController@sendReminderToVoter']);
    });

});
