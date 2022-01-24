<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function getAddresses()
    {
        $addresses = Address::get()->toJson(JSON_PRETTY_PRINT);
        return response($addresses, 200);
    }

    public function getAddressById($id)
    {
        $address = Address::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($address, 200);
    }
}
