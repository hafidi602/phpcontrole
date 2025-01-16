<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerlogin extends Controller
{
    function login(){
        return view('login');
    }
}
