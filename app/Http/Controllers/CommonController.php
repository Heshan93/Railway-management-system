<?php

namespace App\Http\Controllers;

use App\Models\train_station;
use App\Models\train_schedule;
use App\Mail\contactUs;
use App\Models\passenger;
use Illuminate\Support\Facades\Mail;
use App\Models\ticket;
use App\Models\promotion;

use Illuminate\Http\Request;

class CommonController extends Controller
{
  public function index()
  {
    $srch_data = array(
      'search'=>false,
      'st_start' => 0,
      'st_end' => 0,
      'cls' => 0,
      'sch_datef' => date('Y-m-d'),
      'sch_datet' => date('Y-m-d'),
      'pssngrs' => '',
    );
      $st_data = train_station::orderBy('st_name','ASC')->get();
      $sched_data = train_schedule::select('train_schedules.*','trains.train_name')->join('trains','trains.train_id','train_schedules.train_id')->whereDate('schedule_date','>=',$srch_data['sch_datef'])->where('is_active',1)->orderBy('schedule_id','DESC')->get();
      $data = array(
        'filter'=>$srch_data,
        'stations' => $st_data,
        'schedules' =>$sched_data 
      );
      return view('landing_page')->with(['data'=>$data]);
  }

  public function searchData(Request $req)
  {
    $srch_data = array(
      'search'=>true,
      'st_start' => $req->st_start,
      'st_end' => $req->st_end,
      'cls' => $req->cls,
      'sch_datef' => $req->sch_datef,
      'sch_datet' => $req->sch_datet,
      'pssngrs' => $req->pssngrs>0?$req->pssngrs:'',
    );
    $st_data = train_station::orderBy('st_name','ASC')->get();

    $qry = train_schedule::select('train_schedules.*','trains.train_name')->whereBetween('schedule_date',[$req->sch_datef,$req->sch_datet])->join('trains','trains.train_id','train_schedules.train_id')->where('is_active',1)->orderBy('schedule_id','DESC')->get();

    if($req->st_start!=0 && $req->st_end!=0){
      $qry = train_schedule::select('train_schedules.*','trains.train_name')->whereBetween('schedule_date',[$req->sch_datef,$req->sch_datet])->whereRaw("find_in_set($req->st_start , stations)")->whereRaw("find_in_set($req->st_end , stations)")->join('trains','trains.train_id','train_schedules.train_id')->where('is_active',1)->orderBy('schedule_id','DESC')->get();
    }

    $data = array(
      'filter' => $srch_data,
      'stations' => $st_data,
      'schedules' =>$qry, 
    );
    return view('landing_page')->with(['data'=>$data]);
  }


  public function addPromotion()
  { if(session()->has('AName')){
    return view('add-promotion');
  }
  }


  public function createPromotion(Request $req)
  {
    try {
      if(session()->has('AName')){
        $data = array(
          'promo_value'=>$req->promo_value, 
          'booking_limit'=>$req->bookings, 
          'promo_text'=>$req->promo_text, 
      );
     
      $savedata = promotion::create($data)->save();
        return back()->with('success', 'Promotion Created Successfully');
      }
    } catch (\Throwable $th) {
  
      return back()->with('fail', 'Something went wrong. Please try again.');
    }
  }





  public function editPromotion(Request $req)
  { if(session()->has('AName')){
    $data = promotion::where('promo_id',$req->id)->first();
    return view('edit-promotion')->with(['data'=>$data]);
  }
  }


  public function updatePromotion(Request $req)
  {
    try {
      if(session()->has('AName')){
      $update = promotion::where('promo_id',$req->id)->update(['promo_value'=>$req->promo_value, 
      'booking_limit'=>$req->bookings, 
      'promo_text'=>$req->promo_text, ]);
        return back()->with('success', 'Promotion Updated Successfully');
      }
    } catch (\Throwable $th) {
      return back()->with('fail', 'Something went wrong. Please try again.');
    }
  }

  public function viewPromotions()
  {
    try {
      if(session()->has('AName')){
        $data = promotion::where('is_active',1)->get();
        return view('view_promotions')->with(['data'=>$data]);
      }
    } catch (\Throwable $th) {
      return back()->with('fail', 'Something went wrong. Please try again.');
    }
  }
  public function removePromotion(Request $req)
  {
    try {
      if(session()->has('AName')){
        $data = promotion::where('promo_id',$req->id)->update(['is_active'=>0]);
        return back()->with('success', 'Promotion Removed Successfully');
      }
    } catch (\Throwable $th) {
      return back()->with('fail', 'Something went wrong. Please try again.');
    }
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