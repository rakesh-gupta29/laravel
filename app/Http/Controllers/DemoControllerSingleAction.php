<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoControllerSingleAction extends Controller
{
    public function __invoke(string $isAuthorised = "")
    {
        return view("welcome", ["message" => $isAuthorised ? "true" : "false"]);
    }
}
