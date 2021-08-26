<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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


Route::post("user",[App\Http\Controllers\UserAuth::class,'userLogin']);
//Route::view("login",'login');
Route::view("profile",'profile');



Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});



Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});
