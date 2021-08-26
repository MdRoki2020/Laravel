<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::view('signup','signup');
Route::post('signup',[HomeController::class,'signup']);
Route::get('/',[HomeController::class,'home']);


//Route::get('profile',[HomeController::class,'profile']);
Route::get('/profile',function(){
    if(!session()->has('currentUser'))
    {
        return redirect('login');
    }
    return view('profile');
});



//Route::view('login','login');
Route::get('/login',function(){
    if(session()->has('currentUser'))
    {
        return redirect('profile');
    }
    return view('/login');
});

Route::post('login',[HomeController::class,'login']);

//logout..
Route::get('/logout',function(){
    if(session()->has('currentUser'))
    {
        session()->pull('currentUser',null);
    }
    return redirect('/login');
});

//students..
Route::get('/students', [HomeController::class, 'students']);

Route::post('edit/{id}',[HomeController::class,'edit']);
Route::get('edit/{id}',[HomeController::class,'showData']);
Route::get('delete/{id}',[HomeController::class,'delete']);


