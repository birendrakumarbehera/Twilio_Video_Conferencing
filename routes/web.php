<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::livewire('dialer', 'dialer');
Route::get('/dialer', \App\Http\Livewire\Dialer::class);

// Route::get('\dialer', \App\Http\Controllers\CallingController::class);
// Route::get('/db', [Controller::class,'index']);













// dd(app()->make("Hello"));
// class Stadium{

// }
// class Football{
//     public function __construct(Stadium $stadium){
//         $this->stadium = $stadium;
//     }
// }

// class Game {
//     public function __construct(Football $football){
//         $this->football = $football;
//     }
// }

// app()->bind('Game',function(){
//     return new Game(new Football(new Stadium));
// });

// app()->instance('Game',function(){
//     return 'Instance';
// });

// app() ->singleton('random',function(){
//     return Str::random();
// });