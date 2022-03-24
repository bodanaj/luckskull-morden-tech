<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendSmsNotificaition extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('Nexmo key', 'Nexmo secret');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '9685088516',
            'from' => 'John Doe',
            'text' => 'A simple hello message sent from Vonage SMS API'
        ]);
 
        dd('SMS message has been delivered.');
    }
}
