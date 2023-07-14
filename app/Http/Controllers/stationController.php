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
            'train_id' => 'required',
            'train_name' => 'required', 

        ]);


        try {
            // Insert the new Train Station record to db

            $train_station = new train_station();

            $train_station->st_no = $req->train_id;
            $train_station->st_name = $req->train_name;
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
}
