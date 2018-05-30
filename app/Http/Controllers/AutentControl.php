<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AutentControl extends Controller
{
    //
    public function store(Request $request){
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->pass])){
    		echo 'Session iniciada';
    	}
    	else{
    		echo 'no es';
    	}
    }
}
