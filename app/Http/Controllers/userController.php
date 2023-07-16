<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use App\Models\passenger;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class userController extends Controller
{




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


            if ($rec) {
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

    // Handle the passenger login process

    function loginUser(Request $req)
    {

        // validate the passenger

        $req->validate([

            'exampleInputEmail1' => 'required|email',
            'exampleInputPassword2'  => 'required|min:6',


        ]);

        // Login the passenger

        $passenger = passenger::where('email', '=', $req->exampleInputEmail1)->first(); //check & get the Passenger email

        if ($passenger) {
            if (Hash::check($req->exampleInputPassword2, $passenger->password)) { //check the password

                //add user info to session
                $req->session()->put('pName', $passenger->first_name);


                return redirect('/');
            } else {
                return back()->with('fail', 'This password is not correct');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }


     // Handle the passenger logout process

    function logoutUser()
    {

        if (session()->has('pName')) {

            session()->pull('pName');

            return redirect('../');
        }

        return redirect('login');
    }

/////////////////////// Admin User ////////////////////

function viewAddAdmin (){

    $admin =  passenger::where('email', '=', $req->exampleInputEmail1)->first();
   
    if (session()->has('pName')) {


        $latestStationId = train_station::max('st_no');
        $nextStationId =  $latestStationId + 1;

        return View::make('add_stations')->with('data', $nextStationId);
    }
    return view('admin_login');

    
    
    //return view('add_admin');   
}

///////////////////////////////////////////////////////


}
/*

*/