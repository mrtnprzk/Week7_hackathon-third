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



Route::get('/', 'App\Http\Controllers\VeterinaryController@homepage');
Route::get('/search', 'App\Http\Controllers\VeterinaryController@search');
Route::get('/search/list', 'App\Http\Controllers\VeterinaryController@list');
Route::get('/search/list/details/{id}', 'App\Http\Controllers\VeterinaryController@details');
Route::post('/search', 'App\Http\Controllers\VeterinaryController@store');
Route::get('edit/{id}', 'App\Http\Controllers\VeterinaryController@edit');
Route::put('update/{id}', 'App\Http\Controllers\VeterinaryController@update');
Route::delete('/{id}', 'App\Http\Controllers\VeterinaryController@delete');