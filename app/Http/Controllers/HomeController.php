<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        if(!Auth::user())
            return view('tratando');
        else{
            $LAST = DB::select('CALL sp_last_updated');
            $bests = DB::select('CALL sp_best_rating');
            if(Auth::user()->tipo == "admin")
            return view('aceptaRechaza', ['lastest' => $LAST,
                                        'bests' => $bests]);
            else
            return view('LastLanding', ['lastest' => $LAST,
                                        'bests' => $bests]);
        }
    }
}
