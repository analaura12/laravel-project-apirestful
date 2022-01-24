<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users-by-city', 'UserController@getUsersByCity');
Route::get('users-by-state', 'UserController@getUsersByState');
Route::post('create-user', 'UserController@createUser');

Route::get('cities', 'CityController@getCities');
Route::get('city/{id}', 'CityController@getCityById');

Route::get('states', 'StateController@getStates');
Route::get('state/{id}', 'StateController@getCityById');

