<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello() {
        return view('Hello World');
        return "Hello World";
    }
}
