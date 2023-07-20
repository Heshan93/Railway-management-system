<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\train;
use App\Models\train_station;
use Illuminate\Support\Facades\DB;

class profileConroller extends Controller
{
    function getTrainData()
    {

        if (session()->has('pName')) {


            $data = DB::table('tickets')
            ->where('tickets.passenger_id', Session('passenger_id'))
            ->get();
    
            
    
            return  view('profile',['item'=>$data]); 
            
        }
        return view('user_login');

        

    }

    function getHistory(){


        $currentDateTime = date('Y-m-d H:i:s');
    
        $data = DB::table('tickets')
        ->where('tickets.passenger_id', Session('passenger_id'))
        ->get();

        $expireTime = $data[0]->end_time ;

        if($expireTime < $currentDateTime){

            return "sdfsdf";
        }else{
            return"1111111111";
        }

   
    }
}
