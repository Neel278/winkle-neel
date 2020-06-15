<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|confirmed|min:4'
        ]);

        $password = bcrypt($request->input('password'));

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $password;

        $user->save();

        Auth::login($user);
        return redirect()->route('home');
    }
    public function postLogin()
    {
    }
}
