<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;

class AutentControl extends Controller
{
    //
    public function store(Request $request){
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->pass])){
    		return redirect('/usuario/'. Auth::user()->id );
    	}
    	else{
    		return redirect('/');
    	}
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
