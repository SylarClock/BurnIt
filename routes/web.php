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
    return view('tratando');
});
//Route::post('usuario/store', 'User.store');

Route::resource('usuario', 'User');
Route::resource('Review', 'Review');
Route::resource('Comment', 'Comment');
