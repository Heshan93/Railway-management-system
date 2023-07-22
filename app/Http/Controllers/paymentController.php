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
            'title' => "WRITEOFF-PRO Email Confirmation",
            'name' => Session('AName'),
          ];

        Mail::to('fake@emai.com')->send(new TickeReceipt($details));  
     
    }
}
