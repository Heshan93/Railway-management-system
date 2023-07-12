<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;

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

/*
    //add delay to arrival time

    public function calDelay($arr_time, $delay, $amount)
    {
        $arrival = new DateTime($arr_time);
        $delayTime = new DateTime('+' . $delay);
    
        $arrival->add($delayTime->diff($arrival));
    
        $updatedArrival = $arrival->format('Y-m-d H:i:s');
    
        $amount = floatval($amount);
    
        return $updatedArrival;
    }
    
*/
    
    

    // get the train info to track
    function trackTrain($id) {
        if (session()->has('pName')) {
            $data = DB::table('tickets')
                ->join('trains', 'tickets.train_id', '=', 'trains.train_id')
                ->join('train_stations', 'tickets.st_no', '=', 'train_stations.st_no')
                ->where('tickets.train_id', $id)
                ->get();
    

    
            return view('train_info', ['item' => $data]);
        }
        return view('user_login');
    }
    
    
}
