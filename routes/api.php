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
Route::post('/register','Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');



//Contacts
Route::post('contact/create', 'ContactsController@create');
Route::post('contact/read', 'ContactsController@read');
Route::post('contact/update', 'ContactsController@update');
Route::post('contact/delete', 'ContactsController@delete');


//Activity
Route::post('activity/create', 'ActivitiesController@create');
Route::post('activity/read', 'ActivitiesController@read');
Route::post('activity/update', 'ActivitiesController@update');
Route::post('activity/delete', 'ActivitiesController@delete');


//Activity
Route::post('account/create', 'AccountsController@create');
Route::post('account/read', 'AccountsController@read');
Route::post('account/update', 'AccountsController@update');
Route::post('account/delete', 'AccountsController@delete');

//Project
Route::post('project/create', 'ProjectsController@create');
Route::post('project/read', 'ProjectsController@read');
Route::post('project/update', 'ProjectsController@update');
Route::post('project/delete', 'ProjectsController@delete');

//Tool
Route::post('tool/create','ToolsController@create');
Route::post('tool/read','ToolsController@read');
Route::post('tool/update','ToolsController@update');
Route::post('tool/delete','ToolsController@delete');

Route::apiResource('contact-source','API\ContactSourceController');
