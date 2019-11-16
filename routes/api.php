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

Route::get('/get-countries', ['uses' => 'ApiController@getCountries']);
Route::post('/get-cities', ['uses' => 'ApiController@getCityByCountryId']);
Route::get('/get-genders', ['uses' => 'ApiController@getGenders']);
Route::get('/get-messengers', ['uses' => 'ApiController@getMessengers']);
Route::get('/get-values', ['uses' => 'ApiController@getValues']);
Route::get('/get-languages', ['uses' => 'ApiController@getLanguages']);
Route::get('/get-level', ['uses' => 'ApiController@getLevel']);
Route::get('/get-extra_infos', ['uses' => 'ApiController@getExtraInfos']);
Route::get('/get-excursion', ['uses' => 'ApiController@getExcursion']);
Route::get('/signUp', ['uses' => 'ApiController@signUp']);

