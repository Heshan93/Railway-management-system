<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use App\Models\passenger;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\View;

class userController extends Controller
{




    public function registerUser(Request $req)
    {
        if(!session()->has('pName')){

       
        // Add validation 
        $req->validate([
            'firstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:passengers,email',
            'Password' => 'required|string|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirmPassword' => 'required|same:Password',

        ],[
            'Password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, and one digit.',
        ]);

        // Handle the registration process

        try {
            // Insert the new user record

            $newUser = new passenger();

            $newUser->first_name = $req->firstName;
            $newUser->last_name = $req->LastName;
            $newUser->email = $req->email;
            $newUser->password = Hash::make($req->Password); // encrypt the password 
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
        return redirect('profile');
    }

    // Handle the passenger login process

    function loginUser(Request $req)
    {

        // validate the passenger

        $req->validate([

            'Email' => 'required|email|max:255',
            'Password'  => 'required|min:6', 


        ]);

        // Login the passenger

        $passenger = passenger::where('email', '=', $req->Email)->first(); //check & get the Passenger email

        if ($passenger) {
            if (Hash::check($req->Password, $passenger->password)) { //check the password

                //add user info to session
                $req->session()->put('pName', $passenger->first_name);
                $req->session()->put('passenger_id', $passenger->passenger_id);
                $req->session()->put('passenger_email', $passenger->email);


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
            session()->pull('passenger_id');
            session()->pull('email');

            return redirect('../');
        }

        return redirect('login');
    }

/////////////////////// Admin User ////////////////////

                ///// Load admin page & User ID ///////

    function viewAddAdmin() {
        if (session()->has('AName')) {
            $latestUserId = User::max('user_id');
            $nextUserId = $latestUserId + 1;

    
            return View::make('add_admin')->with('data', $nextUserId); 
        }
        
        return view('admin');
    }

                ///// Add Admin User to DB ///////

    function addAdminUser(Request $req){


       // Add validation 
       $req->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|string|max:255|unique:passengers,email',
        'tp_number' => 'required|string|max:15', 
        'nic' => 'required|string|max:15', 
        'department' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'Password' => 'required|string|min:6',
        'confirmPassword' => 'required|min:6|same:Password',
    ], [
        'Password.confirmed' => 'The password confirmation does not match.',
    ]);
        
          try {
            // Insert the new Train user record to db
            $adminUser = new User();

        $adminUser->user_id = $req->user_id;
        $adminUser->first_name = $req->first_name;
        $adminUser->last_name = $req->last_name;
        $adminUser->email = $req->email;
        $adminUser->tp_number = $req->tp_number;
        $adminUser->nic = $req->nic;
        $adminUser->department = $req->department;
        $adminUser->password = Hash::make($req->InputPassword1);
        $adminUser->address = $req->address;

      
        $rec  = $adminUser->save();

        if ($rec) {
            return back()->with('success', 'You have successfully Add a Admin');
        }
            
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                // Duplicate entry error
                return back()->with('fail', 'The Train user already added.');
            } else {
                // Other query exceptions
                return back()->with('fail', 'Something went wrong. Please try again.');
            }
        }    

     
    }


             ///// View Admin User ///////


    function viewAdminUser(){

        if (session()->has('AName')) {

            $data =  User::all();
            
            return view('view_admin',['admin'=>$data]);

            }
        return view('admin_login');
       
    }


     ///// Add Admin User page ///////

    function userEdtview($id){

         $data = user::where('user_id', $id)->first();

        return view('edit_admin',['data'=>$data]);
 

    }


        ///// Update Admin User to DB ///////

    function updateAdminUser(Request $req){


        $req->validate([
            'first_name' => 'required', 
            'last_name' => 'required', 
            'email' => 'required|email', 
            'tp_number' => 'required', 
            'nic' => 'required', 
            'department' => 'required', 
            'address' => 'required', 
            //'InputPassword1' => 'required|min:6', 
            //'confirmInputPassword2' => 'required|min:6',
        ]);

        
          try {
            // Insert the new Train user record to db
            
             $adminUser = User::find($req->user_id);


            $adminUser->user_id = $req->user_id;
            $adminUser->first_name = $req->first_name;
            $adminUser->last_name = $req->last_name;
            $adminUser->email = $req->email;
            $adminUser->tp_number = $req->tp_number;
            $adminUser->nic = $req->nic;
            $adminUser->department = $req->department;
           // $adminUser->password = Hash::make($req->InputPassword1);
           // $adminUser->address = $req->address;

      
        $rec  = $adminUser->save();

        if ($rec) {
            return back()->with('success', 'You have successfully Updated the Admin');
        }
            
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                // Duplicate entry error
                return back()->with('fail', 'The Train user already added.');
            } else {
                // Other query exceptions
                return back()->with('fail', 'Something went wrong. Please try again.');
            }
        }    

     
    }


             ///// Delete Admin User  ///////


        function adminDelete($id){

        $data = User::where('user_id', $id)->first();
        $data->delete();

        return redirect('view_admin_user');
    
        }



       // Handle the Admin login process

       function loginAdmin(Request $req)
       {
        
        
        
           // validate the admin USer
   
           $req->validate([
   
               'email' => 'required|email|string|max:255',
               'password'  => 'required',
   
   
           ]);
   
          // Login the Admin User
   
           $adminUser = User::where('email', '=', $req->email)->first(); //check & get the adminUser email
   
           if ($adminUser) {
               if (Hash::check($req->password, $adminUser->password)) { //check the password
   
                   //add user info to session
                   $req->session()->put('AName', $adminUser->first_name);
   
   
                   return redirect('dashboard');
                   
               } else {
                   return back()->with('fail', 'This password is not correct');
               }
           } else {
               return back()->with('fail', 'This email is not registered');
           }  
       }



       function logoutAdmin()
        {

        if (session()->has('AName')) {

            session()->pull('AName');

            return redirect('admin');
        }

        return redirect('admin');
    }


///////////////////////////////////////////////////////


}
/*

*/