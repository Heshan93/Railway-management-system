<?php

namespace App\Http\Controllers;
use App\Models\train_station;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class stationController extends Controller
{
    //view Add Stations

    function viewAddStations(){

        
        if (session()->has('pName')) {


            $latestStationId = train_station::max('st_no');
            $nextStationId =  $latestStationId + 1;

            return View::make('add_stations')->with('data', $nextStationId);
        }
        return view('admin_login');

    }

    function addStationsToDb(Request $req){
        $req->validate([
            'st_no' => 'required',
            'st_name' => 'required', 

        ]);


        try {
            // Insert the new Train Station record to db

            $train_station = new train_station();

            $train_station->st_no = $req->st_no;
            $train_station->st_name = $req->st_name;
            $rec  = $train_station->save();

            if ($rec) {
                return back()->with('success', 'You have successfully Add a Train Station');
            }
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                // Duplicate entry error
                return back()->with('fail', 'The Train Station already added.');
            } else {
                // Other query exceptions
                return back()->with('fail', 'Something went wrong. Please try again.');
            }
        } 

    }

    // View Train Station record

    function viewStations(){

        if (session()->has('pName')) {

            $data =  train_station::all();
            return view('view_station',['stations' =>$data]);
            }
        return view('admin_login');
       
    }


    
}
