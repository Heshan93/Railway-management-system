<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use App\Models\passenger;
use Illuminate\Support\Facades\Hash;


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

        try {
            // Insert the new user record
                  
        $newUser = new passenger();

        $newUser->first_name = $req->firstName;
        $newUser->last_name = $req->LastName;
        $newUser->email = $req->exampleInputEmail1;
        $newUser->password = Hash::make($req->exampleInputPassword2); // encrypt the password 
        $newUser->tp_number = 13456879;
        //$newUser->dob = 13456879;
        $newUser->nic = '132456';
        $rec  = $newUser->save();
  

        if($rec){
            return back()->with('success', 'You have successfully registered');
        }


        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                // Duplicate entry error
                return back()->with('fail', 'The email address is already registered.');
            } else {
                // Other query exceptions
                return back()->with('fail', 'Something went wrong. Please try again.');
            }
        }



    }


    function loginUser(Request $req){
        
        $req->validate([
            
            'exampleInputEmail1' => 'required|email',
            'exampleInputPassword2' => 'required|min:6',
            
           
        ]);
    }


}
/*

*/