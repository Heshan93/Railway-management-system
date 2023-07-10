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

    public function registerUser(Request $req)
    {
        // Add validation 
        $req->validate([
            'firstName' => 'required',
            'LastName' => 'required',
            'exampleInputEmail1' => 'required|email',
            'exampleInputPassword2' => 'required|min:6',
            'confirmInputPassword2' => 'required|same:exampleInputPassword2',
           
        ]);

        // Handle the registration process
 

    }
}
/*

*/