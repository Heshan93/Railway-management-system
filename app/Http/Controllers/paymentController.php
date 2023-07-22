<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TickeReceipt;
use Illuminate\Contracts\Session\Session;

class paymentController extends Controller
{
    // make the payment

    function makePayment(){

         // $data for email template
         $details  = [
            'name' => Session('AName'),
          ];

        Mail::to( Session('passenger_email'))->send(new TickeReceipt($details));  
     
    }
}
