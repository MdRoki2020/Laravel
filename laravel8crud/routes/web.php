<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/users',[App\Http\Controllers\UserController::class,'users']);
Route::get('/add_data',[App\Http\Controllers\UserController::class,'addData']);
Route::post('/store_data',[App\Http\Controllers\UserController::class,'storeData']);
