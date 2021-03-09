<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class CallingController extends Controller
{
  public $call_button_message = 'Call';

  
  public function call($phone){ 
    $this->phone_number = $phone;

    $this->call_button_message = 'Dialing ...';
    try {
        // dd(env('TWILIO_ACCOUNT_SID'));
        $client = new Client(
            getenv('TWILIO_ACCOUNT_SID'),
            getenv('TWILIO_AUTH_TOKEN')
        );

        try{
            $client->calls->create(
                $this->phone_number,
                getenv('TWILIO_NUMBER'),
                array(
                    "url" => "http://demo.twilio.com/docs/voice.xml")
            );
            $this->call_button_message = 'Call Connected!';
        }catch(\Exception $e){
            $this->call_button_message = $e->getMessage();
        }
    } catch (ConfigurationException $e) {
        $this->call_button_message = $e->getMessage();
    }
 }
    
}


