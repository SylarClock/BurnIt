<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input  as Input;
use Illuminate\Support\Facades\Auth;


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

    public function upload(){

        if(Input::hasFile('file')){

            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads/perfil', Auth::user()->id .".". $file->getClientOriginalExtension());
            echo '';
        }

    }


    /**
     * Show the application ajaxImageUploadPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxImageUploadPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'title' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->passes()) {
          $input = $request->all();
          $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
          $request->image->move(public_path('images'), $input['image']);
          AjaxImage::create($input);
          return response()->json(['success'=>'done']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
