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

Route::get('/', [
    'as' => 'home', function () {
        return view('main');
    }
]);

Route::get('task1', [
    'as' => 'task1', function () {
        return view('task1');
    }
]);

Route::get('task2', [
    'as' => 'task2', function () {
        return view('task2');
    }
]);

Route::get('task3', [
    'as' => 'task3', function () {
        return view('task3');
    }
]);

Route::get('assignment1', [
    'as' => 'assignment1', function () {
        return view('assignment1');
    }
]);

Route::get('task4', [
    'as' => 'task4', function () {
        return view('task4');
    }
]);

Route::get('task5', [
    'as' => 'task5', function () {
        return view('task5');
    }
]);

Route::get('task6', [
    'as' => 'task6', function () {
        return view('task6');
    }
]);

Route::get('task7', [
    'as' => 'task7', function () {
        return view('task7');
    }
]);

Route::get('task8', [
    'as' => 'task8', function () {
        return view('task8');
    }
]);

Route::get('assignment2', [
    'as' => 'assignment2', function () {
        return view('assignment2');
    }
]);
