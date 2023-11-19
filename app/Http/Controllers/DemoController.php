<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    //  assign a middleware for this
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function renderWelcomePage(string $id)
    {
        return view("welcome", ["message" => $id]);

    }
}
