<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$name = [
		'Go to the store',
		'finished the screen cast',
		'Sleep'



	];
    return view('welcome', compact('name'));
});

Route::get('/abouts', function () {
    return view('abouts');
});
