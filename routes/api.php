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

// Setup
// Add route
// Add function to ApiController

// get all jobs
//Route::get('jobs', 'ApiController@index');

// get all jobs by companies_id
Route::get('jobs/{id}', 'ApiController@show');

