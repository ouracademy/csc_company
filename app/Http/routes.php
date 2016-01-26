<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('home', 'HomeController@home');
Route::get('about', 'HomeController@about');
Route::get('contact', 'ContactController@getContact');
Route::post('contact', 'ContactController@postContact');

Route::group(['prefix' => 'services'], function () {
    Route::get('all', 'ServicesController@home');
    Route::get('import', 'ImportController@index');
    Route::get('import/catalog', 'ImportController@catalog');
    Route::get('export', 'ServicesController@export');
    Route::get('courses', 'ServicesController@courses');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
