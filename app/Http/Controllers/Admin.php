<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    //
    public function actionAdmin(Request $request)
    {
        $id = $request['id'];
        
        // $aceptar = $request->input('aceptar');
        $rechazar = $request->input('borrar');

        // if(isset($aceptar))
        // {
        //     $review = DB::table('posts')->where('id', $id)->get();
        //     $review->activo = true; 
        //     //$review->save();
        // }
        if(isset($rechazar))
        {
            DB::table('posts')->where('id', $id)->update(['active' => false]);
            //DB::table('posts')->where('id', $id)->delete();
        }

        return redirect('/');
    }
}
