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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('departments', 'DepartmentsController@index');

Route::get('collections', 'CollectionsController@index')->name('collections.index');

Route::get('collections/create', 'CollectionsController@create')->name('collections.create');

Route::post('collections/store', 'CollectionsController@store')->name('collections.store');

Route::get('collections/{collection}', 'CollectionsController@show')->name('collections.show');

Route::get('series/{series}', 'SeriesController@show')->name('series.show');

Route::get('batch/create/{series}', 'BatchesController@create')->name('batches.create');

Route::get('batch/{batch}', 'BatchesController@show')->name('batches.show');

Route::post('batches/store', 'BatchesController@store')->name('batches.store');

Route::patch('batches/update', 'BatchesController@update')->name('batches.update');

Route::get('record/{record}', 'RecordsController@show');

Auth::routes();
