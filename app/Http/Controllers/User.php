<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function index()
    {
        $users = UserModel::All();
         return view('Usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Registro');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            return response()-json([
                    "mesaje"=> $request->all(),
            ]);
        }else{
            UserModel::create([
                'name' => $request['name'], 
                'last_name' => $request['lastname'], 
                'email' => $request['email'], 
                'password' => bcrypt($request['password']),
                'birth_day' =>$request['birthdate'],
                'tipo' => 'normal'
            ]);

            return redirect('/');//redireccionamos y mandamos un parametro llamado message
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //traer datos del usuario

        $user = DB::table('users')->where('id', $id)->get();
        $posts = DB::table('posts')->select('id', 'title', 'portada', 'description', 'created_at')
                    ->where('user_id', $id)
                    ->where('active', 1)->get();
        return view('Usuarios.profile', [
            'users' => $user,
            'posts' => $posts,
        ]);

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
        $user = UserModel::find($id);
        return view('Usuarios.edit', ['user']);
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

    public function AddAjax(){

    }

}
