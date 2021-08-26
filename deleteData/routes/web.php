<?php

use Illuminate\Support\Facades\Route;

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

Route::get('list',[App\Http\Controllers\MemberController::class,'list']);
Route::get('delete/{id}',[App\Http\Controllers\MemberController::class,'delete']);
Route::get('edit/{id}',[App\Http\Controllers\MemberController::class,'showData']);
Route::post('edit/{id}',[App\Http\Controllers\MemberController::class,'update']);