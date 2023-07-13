<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\train;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;
use Carbon\Carbon;
use Illuminate\Support\Facades\View; 


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
    public function addDelayToArrival($st_arr_time, $delay)
    {
        // Create a Carbon instance from the st_arr_time
        $arrival = Carbon::createFromFormat('Y-m-d H:i:s', $st_arr_time);
        dd($arrival);
        // Add the delay to the arrival time
        $arrival->addMinutes($delay);
    
        // Format the updated arrival time
        $updatedArrival = $arrival->format('Y-m-d H:i:s');
    
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
    

          //  $d1 = $this->addDelayToArrival($data[0]->st_arr_time, $data[0]->delays);

            //dd($d1,$data[0]);

            return view('train_info', ['item' => $data]);
        }
        return view('user_login');
    }



    function addTrain(){

        
            if (session()->has('pName')) {

                  // Add validation 

                
                $latestTrainId = train::max('train_id');
                $nextTrainId = 'Rail_'. $latestTrainId + 1;

                return View::make('add_train')->with('data', $nextTrainId);
            }
            return view('admin_login');
        
    
    }

    function trainToDb(Request $req){

        $req->validate([
            'firstName' => 'required',
            'LastName' => 'required',
            'exampleInputEmail1' => 'required|email',
            'exampleInputPassword2' => 'required|min:6',
            'confirmInputPassword2' => 'required|same:exampleInputPassword2',

        ]);

       return $req;
  

    }
    
    
}
