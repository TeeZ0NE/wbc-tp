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
Route::get('unsubscribe/{id}', function ($id){
	return ['unsu'=>$id];
})->name('unsubscribe');
Route::apiresource('use','API\MainController');

Route::group(['prefix'=>'accounts'], function(){
//	Route::get('{screen_name?}','API\AccountController@index');
	Route::post('new', 'API\AccountController@store');
});

