<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Stat;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class MenuController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
	    {

	    	//meal type:1-dorucak, 2-rucak, 3-vecera
	    	//meal type_id:1-obicni, 2-dijetni, 3-makrobio, 4-bezglutenski, 5-vege
	    	$time  = Carbon::now();
	    	$mrate = (auth()->user()->mrate/3);

	    	$squery = ['date' => $time->toDateString(), 'user_id' => auth()->user()->id];
            $stat = Stat::where($squery)->first();
            
            //unikatni jelovnik po danu postavljanjem datuma kao seed rand funkcije
            $breakfast = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 1)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
           
            $lunch = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 2)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
          
            $dinner = Meal::where('calories', '<', $mrate+200)->where('calories', '>', $mrate-200)->where('type', 3)->where('type_id', auth()->user()->type)->inRandomOrder($time->toDateString())->first();
            $meals = [$breakfast, $lunch, $dinner];

            if($meals[0]==null||$meals[1]==null||$meals[2]==null){
            	$meals=null;
            	$meals = array();
            }
           
	    	
	    	//selektaj pojedinacno i onda ih spoji u array, datum provjeri sa carbonom i bazom
	        return view('menu')->with('meals', $meals)->with('time', $time)->with('stat', $stat);

	    }
}
