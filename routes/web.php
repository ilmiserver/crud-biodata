<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/biodata', 'BiodataController@index');
Route::post('/biodata/create','BiodataController@create');
Route::get('/biodata/{id}/edit','BiodataController@edit');
Route::post('/biodata/{id}/update','BiodataController@update');
Route::get('/biodata/{id}/delete','BiodataController@delete');