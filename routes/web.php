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
    return view('welcome');
});

Route::prefix('news')->name('news.')->group(function() {
	Route::name('index')->get('/', 'NewsController@index');
	Route::name('show')->get('{id}', 'NewsController@show');
});

Route::prefix('terms')->name('terms.')->group(function() {
	Route::name('index')->get('/', 'TermsController@index');
	Route::name('show')->get('{id}', 'TermsController@show');
});
