<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(!Auth::user())
    	return view('tratando');
    else
    	return view('tratando');
});
//Route::post('usuario/store', 'User.store');

Route::post('prueba', 'AjaxFun@AddAjax');//Controlador@funcion

Route::post('upload', 'AjaxFun@upload');


Route::resource('usuario', 'User');
Route::resource('Review', 'Review');
Route::resource('Comment', 'Comment');
Route::resource('autent', 'AutentControl');

Route::get('logout', 'AutentControl@logout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
