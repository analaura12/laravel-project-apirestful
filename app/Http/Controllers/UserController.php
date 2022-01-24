<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\City;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;        
        $user->address_id = $request->address_id;
        $user->city_id = $request->city_id;
        $user->state_id = $request->state_id;

        $user->save();

        return response()->json([
            "message" => "Usuário cadastrado com sucesso"
        ], 201);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;        
        $user->address_id = $request->address_id;
        $user->city_id = $request->city_id;
        $user->state_id = $request->state_id;

        $user->save();

        return response()->json([
            "message" => "Usuário atualizado com sucesso"
        ], 201);
    }

    public function getUser($id){
        $user = User::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($user, 200);
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            "message" => "Usuário deletado com sucesso"
        ], 201);
    }

    public function getUsersByCity($city){
        $city_response = City::where('name', $city)->value('id');
        $users = User::where('state_id', $city_response)->count();
        return response($users, 200);
    }

    public function getUsersByState($state){
        $state_response = State::where('name', $state)->value('id');
        $users = User::where('state_id', $state_response)->count();
        return response($users, 200);
    }
}
