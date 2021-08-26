<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return 'username or password is not matched';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
