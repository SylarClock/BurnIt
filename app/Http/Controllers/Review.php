<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input  as Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Review as Posts;



class Review extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('makePost');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makePost');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request['title'];

        $bloq1 = $request['bloq1'];
        $bloq2 = $request['bloq2'];
        $bloq3 = $request['bloq3'];

        $desc = $request['descripcion'];
        $rate = $request['calificacion'];

        $imgName1= "";
        $imgName2= "";
        $imgName3= "";

        $portname= "";

        if(Input::hasFile('file1')){
            $file1 = Input::file('file1');
            $imgName1 = str_random(15). "." . $file1->getClientOriginalExtension();
            $file1->move('uploads/Review', $imgName1);
        }

        if(Input::hasFile('file2')){
            $file2 = Input::file('file2');
            $imgName2 = str_random(15). "." . $file2->getClientOriginalExtension();
            $file2->move('uploads/Review', $imgName2);
        }

        if(Input::hasFile('file3')){
            $file3 = Input::file('file3');
            $imgName3 = str_random(15). "." . $file3->getClientOriginalExtension();
            $file3->move('uploads/Review', $imgName3);
        }

        if(Input::hasFile('portada1')){
            $portada1 = Input::file('portada1');
            $portname = str_random(15). "." . $portada1->getClientOriginalExtension();
            $portada1->move('uploads/Review', $portname);
        }
        
            
        $last_id = DB::table('posts')->insertGetId([
            'title' => $title,
            'portada' => $portname,
            'description' => $desc,
            'block' => $bloq1,
            'block2' => $bloq2,
            'block3' => $bloq3,
            'path_media' => $imgName1,
            'path_media2' => $imgName2,
            'path_media3' => $imgName3,
            'user_id'   =>Auth::user()->id,
            'rate' => $rate,
            'category_id' => 1,
        ]);
        
        return redirect('/Review/'. $last_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $user = DB::table('users')->where('id', $id)->get();
        // return view('Usuarios.profile', [
        //     'users' => $user,
        // ]);

        $review = DB::table('posts')->where('id', $id)->get();
        $maker = DB::table('users')->select('id', 'name', 'last_name', 'perfil')->where('id', $review[0]->user_id)->get();

        $comentarios = DB::select('CALL sp_get_commentarios_post(?)', [$id]);

        return view('Review.review', ['review' => $review, 'comentarios' => $comentarios, 'maker' => $maker]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $review = DB::table('posts')->where('id', $id)->get();
        $maker = DB::table('users')->select('id', 'name', 'last_name', 'perfil')->where('id', $review[0]->user_id)->get();

        return view('Review.editreview', ['review' => $review, 'maker' => $maker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $title = $request['title'];

        $bloq1 = $request['bloq1'];
        $bloq2 = $request['bloq2'];
        $bloq3 = $request['bloq3'];

        $desc = $request['descripcion'];
        $rate = $request['calificacion'];

        $imgName1= "";
        $imgName2= "";
        $imgName3= "";


        $portname= "";

        if(Input::hasFile('file1')){
            $file1 = Input::file('file1');
            $imgName1 = str_random(15). "." . $file1->getClientOriginalExtension();
            $file1->move('uploads/Review', $imgName1);
        }

        if(Input::hasFile('file2')){
            $file2 = Input::file('file2');
            $imgName2 = str_random(15). "." . $file2->getClientOriginalExtension();
            $file2->move('uploads/Review', $imgName2);
        }

        if(Input::hasFile('file3')){
            $file3 = Input::file('file3');
            $imgName3 = str_random(15). "." . $file3->getClientOriginalExtension();
            $file3->move('uploads/Review', $imgName3);
        }

        if(Input::hasFile('portada1')){
            $portada1 = Input::file('portada1');
            $portname = str_random(15). "." . $portada1->getClientOriginalExtension();
            $portada1->move('uploads/Review', $portname);
        }
        
        $editPost = Posts::find($id);

         $editPost->title = $title;
         $editPost->portada = $portname;
         $editPost->description = $desc;
         $editPost->block = $bloq1;
         $editPost->block2 = $bloq2;
         $editPost->block3 = $bloq3;
         if($imgName1!="")
            $editPost->path_media = $imgName1;
         if($imgName2!="")
            $editPost->path_media2 = $imgName2;
         if($imgName3!="")
            $editPost->path_media3 = $imgName3;
         $editPost->rate = $rate;

        $editPost->save();

        
        return redirect('/Review/'. $id);


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
