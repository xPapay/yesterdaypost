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

Route::get('/', 'HomeController@today')->name('today');
Route::get('/{year}/{month}/{day}', 'HomeController@date')->name('date')
		->where([
			'year' => '[0-9]{4}',
			'month' => '(0[1-9])|([1][0-2])',
			'day' => '(0[1-9])|([1-2][0-9])|(3[0-1])'
		]);
