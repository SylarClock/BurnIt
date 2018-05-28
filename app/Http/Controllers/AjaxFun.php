<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxFun extends Controller
{
    //


    public function AddAjax(Request $request){
    	echo json_encode($_POST);
    }
}
