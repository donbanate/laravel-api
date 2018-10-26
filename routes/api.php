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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('polls', 'PollsController');
Route::any('errors', 'PollsController@errors'); // respond to any errors in api
Route::apiResource('questions', 'QuestionsController');

// Fetch data in two tables POLLS and QUESTIONS
Route::get('polls/{poll}/questions', 'PollsController@questions');
Route::get('files/get', 'FilesController@show');