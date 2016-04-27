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

Route::get('/', ['as' => 'home', function () {
    return view('main');
}]);

Route::get('task1', ['as' => 'task1', function() {
	return view('task1');
}]);

Route::get('task2', ['as' => 'task2', function() {
	return view('task2');
}]);

Route::get('task3', ['as' => 'task3', function() {
	return view('task3');
}]);

Route::get('assignment1', ['as' => 'assignment1', function() {
	return view('assignment1');
}]);
