<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;

class userController extends Controller
{
    function userLogin()
    {
        return view('user_login');
    }

    function userRegister(){
        return view('registration');
    }
}
