<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#CRUD de Usuários

#CREATE - Cria um usuário
Route::post('create-user', 'App\Http\Controllers\UserController@createUser');
#READ - Retorna os usuários cadastrados
Route::get('get-users', 'App\Http\Controllers\UserController@getUsers');
#UPDATE - Atualiza um usuário
Route::post('update-user/{id}', 'App\Http\Controllers\UserController@updateUser');
#DELETE -  Exclui um usuário
Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@deleteUser');
#EDIT - Retorna um usuário específico
Route::get('get-user/{id}', 'App\Http\Controllers\UserController@getUser');

#-------------------------

#Rotas referente aos endereços 

#Obter endereços
Route::get('get-addresses', 'App\Http\Controllers\AddressController@getAddresses');
#Obter endereços por id
Route::get('get-address/{id}', 'App\Http\Controllers\AddressController@getAddressById');

#-------------------------

#Rotas referente as cidades 

#Obter cidades
Route::get('get-cities', 'App\Http\Controllers\CityController@getCities');
#Obter cidade por id
Route::get('city/{id}', 'App\Http\Controllers\CityController@getCityById');

#-------------------------

#Rotas referente aos estados

#Obter estados
Route::get('get-states', 'App\Http\Controllers\StateController@getStates');
#Obter estado por id
Route::get('get-state/{id}', 'App\Http\Controllers\StateController@getStateById');




Route::get('users-by-city', 'App\Http\Controllers\UserController@getUsersByCity');
Route::get('users-by-state', 'App\Http\Controllers\UserController@getUsersByState');

