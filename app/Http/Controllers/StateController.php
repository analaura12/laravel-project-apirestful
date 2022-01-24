<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStates()
    {
        $states = State::get()->toJson(JSON_PRETTY_PRINT);
        return response($states, 200);
    }

    public function getStateById($id)
    {
        $state = State::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($state, 200);
    }
}
