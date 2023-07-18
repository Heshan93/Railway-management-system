<?php

namespace App\Http\Controllers;

use App\Models\train_station;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index()
    {
        $st_data = train_station::orderBy('st_name','ASC')->get();
        $data = array(
          'stations' => $st_data 
        );
        return view('landing_page')->with(['data'=>$data]);
    }
}