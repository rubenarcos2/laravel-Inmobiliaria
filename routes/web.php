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

Route::get('/properties', '\App\Http\Controllers\PropertyController@index')->name('properties');

Route::post('/properties', 'App\Http\Controllers\PropertyController@store');
Auth::routes();
Route::delete('/properties/{id}', 'App\Http\Controllers\PropertyController@destroy')->name('properties-destroy');
Auth::routes();
Route::get('/properties/{id}', 'App\Http\Controllers\PropertyController@show')->name('properties-edit');
Auth::routes();
Route::patch('/properties/{id}', 'App\Http\Controllers\PropertyController@update')->name('properties-update');

Route::get('/', '\App\Http\Controllers\HouseController@index')->name('houses');
Route::post('/', 'App\Http\Controllers\HouseController@store');
Route::get('/{id}', 'App\Http\Controllers\HouseController@show')->name('houses-show');

Auth::routes();
Route::delete('/{id}', 'App\Http\Controllers\HouseController@destroy')->name('houses-destroy');
Auth::routes();
Route::patch('/{id}', 'App\Http\Controllers\HouseController@update')->name('houses-update');
Auth::routes();
Route::get('/edit/{id}', 'App\Http\Controllers\HouseController@edit')->name('houses-edit');
