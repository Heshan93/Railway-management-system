<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;

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

    function trackTrain($id){

        return $ticket = ticket::where('train_id', $id)->first(); // Retrieve the ticket with the specified tc_number

       

    }
}
