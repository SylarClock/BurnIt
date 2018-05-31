<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;


class AjaxFun extends Controller
{
    //


    public function AddAjax(Request $request){
    	$id = $_POST['id'];
    	$name = $_POST['name'];
    	$lastname = $_POST['last_name'];
    	$email = $_POST['email'];
    	$birth = $_POST['birth_day'];



        DB::table('users')->where('id', $id)->update(['name'=> $name,
        											'last_name'=> $lastname,
        												'email'=> $email,
        												'birth_day'=> $birth,
    												]);

        if($_POST['password'] != ""){
    		$pass = bcrypt($_POST['password']);
        	DB::table('users')->where('id', $id)->update(['password'=> $pass]);
        }


    	echo json_encode($_POST);


    }
}
