<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;
use App\Meal;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time  = Carbon::now();
        $user_id =  auth()->user()->id;
        $squery = ['date' => $time->toDateString(), 'user_id' => $user_id];
        $stat = Stat::where($squery)->first();


        $mrate = (auth()->user()->mrate/3);
            
            //unikatni jelovnik po danu postavljanjem datuma kao seed rand funkcije
        $breakfast = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 1)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
           
        $lunch = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 2)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
          
        $dinner = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 3)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
        
        if($breakfast && $lunch && $dinner){
        $cals = $dinner->calories + $lunch->calories + $breakfast->calories;
        }else{
            $cals = 0;
        }

        $stats = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('date');

        $calories = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('calories');
       
        return view('home')->with('stat', $stat)->with('stats', $stats)->with('calories', $calories)->with('cals', $cals);
    }
}
