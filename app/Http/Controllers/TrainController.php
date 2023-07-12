<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use Illuminate\Support\Facades\DB;

class TrainController extends Controller
{
    // get ticket from db

    function getTicket(){

        if (session()->has('pName')) {

            $data = ticket::all();

            return view('active_ticket',['item'=>$data] );

        }
        return view('user_login');
    }

    // get the train info to track
    function trackTrain($id){

          

            if (session()->has('pName')) {

                $data = DB::table('tickets')
                ->join('trains', 'tickets.train_id', '=', 'trains.train_id')
                ->join('train_stations', 'tickets.st_no', '=', 'train_stations.st_no')
                ->where('tickets.train_id', $id)
                ->get();
            
    
                return view('train_info',['item'=>$data] );
    
            }
            return view('user_login');
    }
    
}
