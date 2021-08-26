<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Session;

class Users extends Controller
{
    //
    function list(){
        //return Session::get('logData');
        $user=user::all();
        return view('userlist',['user'=>$user]);
    }

    function create(){
        return view('create');
    }

    function loginsubmit(Request $req){
        //return print_r($req->input());
        return user::select('*')->where(
            [
                ['email','=',$req->email],
                ['password','=',$req->password]
            ]
        )->get();
        $req->session()->put('logData',[$req->input()]);
        return redirect('/list');
    }

    function createsubmit(Request $req){
        $user=new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result=$user->save();
        if($result){
            return redirect('userlist');
        }
    }
}
