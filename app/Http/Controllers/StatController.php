<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stat;
use App\Meal;
use Carbon\Carbon;

class StatController extends Controller
{
    

    public function submit(Request $request){
//poziva se iz jelovnika, ako ne postoji baza za taj datum napravi novu i spremaj podatke, a u protivnom ažuriraj promjene
    	if($request->isMethod('post')){

    		$meal = DB::table('meals')->where('id', $request->input('id'))->first();
    		$date = Carbon::now();
            $query = ['date' => $date->toDateString(), 'user_id' => auth()->user()->id];
            $estat = Stat::where($query)->first();

            if($estat === null){
    	    	$stat=new Stat();
    	    	$stat->calories = $meal->calories;
    	    	$stat->user_id = auth()->user()->id;
                $stat->date = $date->toDateString();
                $stat->datavalue = 33.3;
                if($meal->type==1)$stat->breakfast = true;
                else if($meal->type==2)$stat->lunch = true;
                else $stat->dinner = true;
                $stat->save();
            }else{
                if($meal->type==1)$estat->breakfast = true;
                else if($meal->type==2)$estat->lunch = true;
                else $estat->dinner = true;
                $estat->calories += $meal->calories;
                $estat->datavalue += 33.3;
                $estat->save();
        }
      
    }
    }
}
