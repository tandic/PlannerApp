<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }


  public function submit(Request $request)
	    {
	        $this->validate($request, [
	        	'tezina' => 'required',
	        	'visina' => 'required',
	        	'godine' => 'required'
	        		]);
	        
	    	$tezina = $request->input('tezina');
 			$visina = $request->input('visina');
			$godine = $request->input('godine');
 			$spol = $request->input('option');
 			$vrsta = $request->input('type');
	    	
	        $user = new User();
	        $user->exists = true;
	        $user->id = auth()->user()->id;//spremi detalje logiranog usera
	        $user->weight = $tezina;
	        $user->height= $visina;
	        $user->years = $godine;
	        $user->gender= $spol;
	        $user->type = $vrsta;
	        if($request->input('option')==='Z'){
	        	 $user->mrate = 655 + (9.6 * $tezina) + (1.8 * $visina) - (4.7 * $godine); 
	        	}else{
	        	 $user->mrate = 66 + (13.7 * $tezina) + (5 * $visina) - (6.8 * $godine); 
	        	}
	       
	        $user->save();
	    

	        return redirect('/home')->with('status', 'Uspješno uneseno!');
}

	
    public function index()
	    {
	    	$user = User::find(auth()->user()->id);
	        return view('user')->with('user', $user);
	    }
}
