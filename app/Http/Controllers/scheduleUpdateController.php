<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scheduleUpdateController extends Controller
{
    function getTrain(){
        
            if (session()->has('pName')) {
        
                return view('update_train');;
            }
            return view('user_login');
    
        
        
       
    }
}
