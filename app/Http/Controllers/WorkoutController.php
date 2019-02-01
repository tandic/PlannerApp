<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;

class WorkoutController extends Controller
{
    
		 public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
	    {
	        return view('workout');
	    }

	     public function progressIndex()
	    {
	    	$user_id =  auth()->user()->id;
	    	$stats = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('date');
	    	$calories = Stat::where('user_id',  $user_id)->orderBy('date')->pluck('calories');
	    	
	        return view('progress')->with('stats', $stats)->with('calories', $calories);
	    }

	    public function upper(){
	    	return view('workoutub');
	    }

	    public function lower(){
	    	return view('workoutlb');
	    }
}
