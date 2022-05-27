<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class API extends Controller
{
    function getData()
    {
        return [
            "name" => "John Doe",
            "age" => "25",
            "address" => "123 Main St."
        ];
    }
}