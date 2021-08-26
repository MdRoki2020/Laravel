<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMember;

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
    return view('welcome');
});

Route::view('add','add');
Route::post('addmember',[App\Http\Controllers\AddMember::class,'add']);
