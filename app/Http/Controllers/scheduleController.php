<?php

namespace App\Http\Controllers;
use App\Models\train_station;
use App\Models\train;
use App\Models\train_schedule;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
/*     public function authCheck()
    {
        
        if (session()->has('AName')) {
            return true;
        }else{
            return view('user_login');
        }
        
    } */

    function addSchedule(){
        if(session()->has('AName')){
              

            $st_data = train_station::orderBy('st_name','ASC')->get();
            $tr_data = train::orderBy('train_name','ASC')->get();
            $data = array(
             'stations' => $st_data,
             'trains' =>$tr_data 
            );
            return view('create_schedule')->with(['data'=>$data]);
        } 
        return view('admin_login');
    }
    public function createSchedule(Request $req)
    {
        if(session()->has('AName')){
        $req->validate([
            'schedule_date' => 'required',
            'stations' => 'required', 
            'train_id' => 'required', 
            'start_station' => 'required', 
            'start_time' => 'required', 
            'end_station' => 'required',
            'end_time' => 'required',

        ]);

        try {
            $schedule_data = array(
                'schedule_date'=>$req->schedule_date, 
                'stations'=>implode(",",$req->stations), 
                'train_id'=>$req->train_id, 
                'start_station'=>$req->start_station, 
                'start_time'=>$req->start_time, 
                'end_station'=>$req->end_station, 
                'end_time'=>$req->end_time, 
                'class_1_seats'=>$req->class_1,
                'class_2_seats'=>$req->class_2,
                'class_3_seats'=>$req->class_3,
                'status'=>0, 
            );
           
            $savedata = train_schedule::create($schedule_data)->save();

            if($savedata){
                return back()->with('success', 'You have successfully Create a shcedule');
            }

        } catch (\Throwable $th) {
            dd($th->getMessage());
            // return back()->with('fail', 'Something went wrong. Please try again.');
        }
    }
    return view('admin_login');
        
    }

    public function viewSchedules(Request $req)
    {
        if(session()->has('AName')){
            $sched_data = train_schedule::select('train_schedules.*','trains.train_name')->join('trains','trains.train_id','train_schedules.train_id')->where('is_active',1)->orderBy('id','DESC')->get();
            $st_data = train_station::orderBy('st_name','ASC')->get();
           
            $data = array(
             'schedules' => $sched_data,
             'stations' => $st_data,
            );
            return view('view_schedules')->with(['data'=>$data]);
        }
        return view('admin_login');
    }

    public function updateSchedule(Request $req)
    {
        if(session()->has('AName')){
            $sched_data = train_schedule::where('id',$req->id)->get();
            $st_data = train_station::orderBy('st_name','ASC')->get();
            $tr_data = train::orderBy('train_name','ASC')->get();
            $data = array(
             'schedule' => $sched_data,
             'stations' => $st_data,
             'trains' =>$tr_data 
            );
            return view('edit-schedule')->with(['data'=>$data]);
        }
        return view('admin_login');
    }

    public function reschedule(Request $req)
    {
        if(session()->has('AName')){
            $sched_data = train_schedule::where('id',$req->id)->get();
            $st_data = train_station::orderBy('st_name','ASC')->get();
            $tr_data = train::orderBy('train_name','ASC')->get();
            $data = array(
             'schedule' => $sched_data,
             'stations' => $st_data,
             'trains' =>$tr_data 
            );
            return view('reschedule')->with(['data'=>$data]);
        }
        return view('admin_login');
    }
    
    public function editSchedule(Request $req)
    {
        if(session()->has('AName')){
            $update_schedule= train_schedule::where('id',$req->id)->update([
                'schedule_date'=>$req->schedule_date, 
                'stations'=>implode(",",$req->stations), 
                'train_id'=>$req->train_id, 
                'start_station'=>$req->start_station, 
                'start_time'=>$req->start_time, 
                'end_station'=>$req->end_station, 
                'end_time'=>$req->end_time, 
                'class_1_seats'=>$req->class_1,
                'class_2_seats'=>$req->class_2,
                'class_3_seats'=>$req->class_3,
            ]) ;
            if($update_schedule){
                return back()->with('success', 'You have successfully updated the shcedule');
            }
        }
        return view('admin_login');
    }

    public function createReschedule(Request $req)
    {
        if(session()->has('AName')){
        $req->validate([
            'schedule_date' => 'required',
            'stations' => 'required', 
            'train_id' => 'required', 
            'start_station' => 'required', 
            'start_time' => 'required', 
            'end_station' => 'required',
            'end_time' => 'required',

        ]);

        try {
            $schedule_data = array(
                'schedule_date'=>$req->schedule_date, 
                'stations'=>implode(",",$req->stations), 
                'train_id'=>$req->train_id, 
                'start_station'=>$req->start_station, 
                'start_time'=>$req->start_time, 
                'end_station'=>$req->end_station, 
                'end_time'=>$req->end_time, 
                'class_1_seats'=>$req->class_1,
                'class_2_seats'=>$req->class_2,
                'class_3_seats'=>$req->class_3,
                'status'=>0, 
            );
           
            $savedata = train_schedule::create($schedule_data)->save();

            if($savedata){
                return back()->with('success', 'Re-Schedule Created Successfully');
            }

        } catch (\Throwable $th) {
            dd($th->getMessage());
            // return back()->with('fail', 'Something went wrong. Please try again.');
        }
    }
    return view('admin_login');
        
    }
    public function deleteSchedule($id){

        if(session()->has('AName')){

        $data = train_schedule::find($id);
        $data->update(['is_active'=>0]);

        return redirect('view_schedules');

        }
        return view('admin_login');
    
    }
}