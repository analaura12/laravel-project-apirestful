<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users-by-city', 'App\Http\Controllers\UserController@getUsersByCity');
Route::get('users-by-state', 'App\Http\Controllers\UserController@getUsersByState');

Route::post('create-user', 'App\Http\Controllers\UserController@createUser');

Route::get('cities', 'App\Http\Controllers\CityController@getCities');
Route::get('city/{id}', 'App\Http\Controllers\CityController@getCityById');

Route::get('states', 'App\Http\Controllers\StateController@getStates');
Route::get('state/{id}', 'App\Http\Controllers\StateController@getCityById');

Route::get('addresses', 'App\Http\Controllers\CityController@getAddresses');
Route::get('address/{id}', 'App\Http\Controllers\CityController@getAddressById');


