<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	 //validacija unosa
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	//attempt logiranja korisnika
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		//ako je logiranje uspjesno redirect do zeljene lokacije(dashboard je default)
    		return redirect()->intended(route('admin.dashboard'));

    	}
    	//ako je neuspjesno, redirect na login
    	return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function logout()
    {

    	Auth::guard('admin')->logout();

    	return redirect('/');

    }
}
