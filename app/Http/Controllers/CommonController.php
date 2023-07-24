<?php

namespace App\Http\Controllers;

use App\Models\train_station;
use App\Models\train_schedule;
use App\Mail\contactUs;
use App\Models\passenger;
use Illuminate\Support\Facades\Mail;
use App\Models\ticket;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $st_data = train_station::orderBy('st_name','ASC')->get();
        $sched_data = train_schedule::select('train_schedules.*','trains.train_name')->join('trains','trains.train_id','train_schedules.train_id')->where('is_active',1)->orderBy('schedule_id','DESC')->get();
        
        $passengerCount = Passenger::count();
        

        $data = array(
          'stations' => $st_data,
          'schedules' =>$sched_data,
          'passengerCount' =>$passengerCount,

        );

        
        return view('landing_page')->with(['data'=>$data]);
    }

    public function searchData(Request $req)
    {
      $st_start = $req->st_start;
      $st_end = $req->st_end;
      $cls = $req->cls;
      $sch_date = $req->sch_date;
      $pssngrs = $req->pssngrs;

      dd($req);

    }


    function contactEmail(Request $req){

   // $data for email template
   $details  = [
    'name'=>$req->name,
    'email'=>$req->email,
    'subject'=>$req->subject,
    'message'=>$req->message,
  
   ];

        Mail::to($req->email)->send(new contactUs($details));  

        return redirect('/');
    }


    public function dashboardWidget(){

      if (session()->has('AName')) {

        $passengerCount = Passenger::count();
        $ticketCount = ticket::count();
        

        $data = array(

          'passengerCount' =>$passengerCount,
          'ticketCount' =>$ticketCount,

        );

        
        return view('dashboard')->with(['data'=>$data]);

      }
        return view('admin_login');

    }
} 