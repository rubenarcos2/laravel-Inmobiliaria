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
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::delete('/{id}', 'App\Http\Controllers\HouseController@destroy')->name('houses-destroy');
    Route::post('/edit/{id}', 'App\Http\Controllers\HouseController@update')->name('houses-update');
    Route::get('/edit/{id}', 'App\Http\Controllers\HouseController@edit')->name('houses-edit');
    Route::get('/new', 'App\Http\Controllers\HouseController@new')->name('houses-new');
    Route::post('/new', 'App\Http\Controllers\HouseController@store')->name('houses-new');

    Route::get('/properties', '\App\Http\Controllers\PropertyController@index')->name('properties');
    Route::get('/properties/new', 'App\Http\Controllers\PropertyController@new')->name('properties-new');
    Route::post('/properties/new', 'App\Http\Controllers\PropertyController@store')->name('properties-new');
    Route::get('/properties/{id}', 'App\Http\Controllers\PropertyController@show')->name('properties-show');
    Route::delete('/properties/{id}', 'App\Http\Controllers\PropertyController@destroy')->name('properties-destroy');
    Route::post('/properties/edit/{id}', 'App\Http\Controllers\PropertyController@update')->name('properties-update');
    Route::get('/properties/edit/{id}', 'App\Http\Controllers\PropertyController@edit')->name('properties-edit');
});

Route::get('/', '\App\Http\Controllers\HouseController@index')->name('houses');
Route::get('/{id}', 'App\Http\Controllers\HouseController@show')->name('houses-show');
