<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\InitiateCall;

class CallingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
       // app()->bind('Hello',function (){ return "Hii";});
    //    dd("abc");

    $this->app->bind('App\Services\InitiateCall', function ($app) {
        return new Calling_class();
      });   

     }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //


    }
}
