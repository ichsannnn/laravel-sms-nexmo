<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function formSMS()
    {
      return view('sms.sms');
    }

    public function sendSMS(Request $r, \Nexmo\Client $nexmo)
    {
      $content = $r->input('sms_content');
      $to = $r->input('phone_number');

      $message = $nexmo->message()->send([
        'to' => $to,
        'from' => 'PROSOFT',
        'text' => $content
      ]);

      \Log::info('sent message: ' . $message['message-id']);

      echo 'success<br>';
      echo '<a href="'.\URL::previous().'">Back</a>';
    }
}
