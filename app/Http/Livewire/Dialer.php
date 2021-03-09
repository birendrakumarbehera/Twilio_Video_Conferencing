<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;
use App\Services\InitiateCall;

class Dialer extends Component
{
    public $phone_number ="";
    public $call_button_message = 'Call';
    public function render()
    {
        return view('livewire.dialer');
    }

     protected $listeners = ['call_initiate' => 'dataPassing'];
     
     public function dataPassing(Calling_class $phone)
     {
         print_r($phone);
         echo $phone->call();
     }
     
 
   
}
