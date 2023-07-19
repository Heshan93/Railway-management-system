<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scheduleController extends Controller
{
    function addSchedule(){
        
            if (session()->has('AName')) {

                

        
                return view('create_schedule');
            }
            return view('user_login');
    
        
        
       
    }
}
