<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\User;
use App\Services\InitiateCall\InitiateCall;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    // public function index(){
    //     $obj=new User;
    // $obj->name="birendra";
    // $obj.save();
    // }
    // public function call(Calling_class $customServiceInstance)
    // {
    //     echo $customServiceInstance->doSomethingUseful();
    // }
}
