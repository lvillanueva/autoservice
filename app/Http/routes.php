<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');




Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
 * this route sum many numbers
 */


Route::get('/sum/{2}/{3}','OperationController@sum');

Route::get('/subtraction','OperationController@subtraction');

Route::get('/multiplication','OperationController@multiplication');

Route::get('/division','OperationController@division');

