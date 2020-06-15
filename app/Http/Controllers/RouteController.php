<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function signup()
    {
        return view('user.signup');
    }
}
