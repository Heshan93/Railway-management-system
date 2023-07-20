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
    
                 // Get the current date and time
                 $currentDateTime = date('Y-m-d H:i:s');

                    // Get all the records for the passenger where the ticket has expired
                    $history = DB::table('tickets')
                    ->where('tickets.passenger_id', Session('passenger_id'))
                    ->where('tickets.end_time', '<', $currentDateTime) // Check if the ticket end_time is less than current date and time
                    ->get();
                
                   
            
    
            return  view('profile',[
                
                'item'=>$data,
                'history'=>$history,
            
            ]); 
            
        }
        return view('user_login');

        

    }

   /*  function getHistory(){

        

         // Get the current date and time
         $currentDateTime = date('Y-m-d H:i:s');

         // Get all the records for the passenger where the ticket has expired
         $history = DB::table('tickets')
         ->where('tickets.passenger_id', Session('passenger_id'))
         ->where('tickets.end_time', '<', $currentDateTime) // Check if the ticket end_time is less than current date and time
         ->get();
         
            return $history; 



   
    } */
}
