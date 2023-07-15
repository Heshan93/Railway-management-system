<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scheduleController extends Controller
{
    function addSchedule(){
        
            if (session()->has('pName')) {



        
                return'sdfd'; //view('update_train');;
            }
            return view('user_login');
    
        
        
       
    }
}
