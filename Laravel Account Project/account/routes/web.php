<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
    return view('login');
});

Route::get('userlist/',[App\Http\Controllers\Users::class,'list']);
Route::get('create/',[App\Http\Controllers\Users::class,'create']);
Route::post('loginsubmit/',[App\Http\Controllers\Users::class,'loginsubmit']);
Route::post('createsubmit/',[App\Http\Controllers\Users::class,'createsubmit']);


//Route::group(['middleware'=>['logCheck']],function(){
    
//});
