<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function getCities()
    {
        $cities = City::get()->toJson(JSON_PRETTY_PRINT);
        return response($cities, 200);
    }

    public function getCityById($id)
    {
        $city = City::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($city, 200);
    }
}
