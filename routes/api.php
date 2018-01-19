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


Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function(){
  Route::post('get-details', 'API\PassportController@getDetails');
  Route::post('logout', 'API\PassportController@logout');

  //AdminController
  Route::post('db-users-count', 'API\AdminController@totalDBClients');
  Route::post('list-of-users', 'API\AdminController@listOfClients');
  Route::get('user/{client_id}/details', 'API\AdminController@clientFullDetails');
  Route::get('user/{query}/search', 'API\AdminController@clientSearch');
  Route::get('user/{client_id}/panic-details', 'API\AdminController@clientDangerOccurencesDetails');
  Route::get('user/{client_id}/panic-count', 'API\AdminController@clientDangerOccurencesCount');
  Route::get('user/{client_id}/panic-coordinates', 'API\AdminController@clientDangerOccurencesCoordinates');
});
