<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;
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
        $user_id =  auth()->user()->id;
        $squery = ['date' => Carbon::now()->toDateString(), 'user_id' => $user_id];
        $stat = Stat::where($squery)->first();
        
        $stats = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('date');
        $calories = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('calories');
       
        return view('home')->with('stat', $stat)->with('stats', $stats)->with('calories', $calories);
    }
}
