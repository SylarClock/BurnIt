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

    public function ChecarEmail(Request $request){
        $repetido = DB::table('users')->where('email', $_POST['email'])->get();
        if(count($repetido)> 0){
            echo json_encode("Repetido");
        }else{
            echo json_encode("OK");
        }
    }

    public function search(Request $request){
        $like = $_POST['search'];

        $posts = DB::table('posts')
                    ->select('id', 'title', 'portada')
                    ->where('title', 'like', '%'. $like .'%')->get();

        $profiles = DB::table('users')
                        ->select('id', 'name', 'last_name', 'perfil')
                        ->where('name', 'like', '%'. $like .'%')
                        ->orWhere('last_name', 'like', '%'. $like .'%')->get();

        $results = count($posts) > 0 ? "<li class='srch-section'><div><h5><strong>Criticas</strong></h5></div></li>" : "";

        foreach ($posts as $post) {
            $results.= "<li class='srch-res'>";
            $results.= "<a href='/Review/". $post->id ."'>";
            $results.= "<div class='row'><div class='col-lg-2 col-md-3 col-sm-4 col-xs-5 center-block'>";
            $results.= "<img src=". asset('uploads/Review/' . $post->portada) ." class='img-circle'></div>"
                        ."<div class='col-lg-10 col-md-9 col-sm-8 col-xs-7'><h5>". $post->title ."</h5></div></div></a></li>";
        }

        $results.= count($profiles) > 0 ? "<li class='srch-section'><div><h5><strong>Usuarios</strong></h5></div></li>":"";

        foreach ($profiles as $profile) {
            $results.="<li class='srch-res'><a href='/usuario/". $profile->id ."'>"
                        ."<div class='row'><div class='col-lg-2 col-md-3 col-sm-4 col-xs-5 center-block'>"
                        ."<img src='"; 
            if($profile->perfil!="")
                $results.= asset('uploads/perfil/'. $profile->perfil );
            else
                $results.= asset('resources/Profile.jpg');

            $results.= "' class='img-circle'></div><div class='col-lg-10 col-md-9 col-sm-8 col-xs-7'>"
                        ."<h5>" . $profile->name . " " . $profile->last_name ."</h5></div></div></a></li>";
        }


        echo json_encode($results);
    }

    public function upload(){

        if(Input::hasFile('file')){
            $id = Auth::user()->id;
            
            $file = Input::file('file');
            $newFileName = $id .".". $file->getClientOriginalExtension();

            $file->move('uploads/perfil', $newFileName);
            //insertar en db
            DB::table('users')->where('id', $id)->update(['perfil'=> $newFileName]);

            return redirect('/usuario/'. $id);//redireccionamos y mandamos un parametro llamado message 
        }
    }



    public function uploadPortada(){

        if(Input::hasFile('file')){
            $id = Auth::user()->id;
            
            $file = Input::file('file');
            $newFileName = $id .".". $file->getClientOriginalExtension();

            $file->move('uploads/portada', $newFileName);
            //insertar en db
            DB::table('users')->where('id', $id)->update(['portada'=> $newFileName]);

            return redirect('/usuario/'. $id);//redireccionamos y mandamos un parametro llamado message 
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
