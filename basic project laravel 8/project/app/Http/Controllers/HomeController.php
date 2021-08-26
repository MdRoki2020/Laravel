<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class HomeController extends Controller
{
    //signup functioin..

    public function signup(Request $req)
    {

        //flash session start..
        $data = $req->input('email');
        $req->session()->flash('email', $data);
        //flash session end..

        $user=new user;
        $user->fname=$req->fname;
        $user->lname=$req->lname;
        $user->address=$req->address;
        $user->email=$req->email;
        $user->password=Hash::make($req['password']);


        if ($req->hasfile('picture')) {
            $file = $req->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $user->picture = $filename;
        }
        $result = $user->save();

        if ($result == true) {
            return redirect('signup');
        }
    }


    //profile function
    function profile(){
        return view('profile');
    }

    //home function
    function home(){
        return view('home');
    }

    //login function
    function login(Request $req){
        $user= user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return redirect('/login')->with('error', 'Email-Address And Password Are Wrong.');
        }
        else{
            $req->session()->put('currentUser',$user);
            return redirect('/profile');
        }
    }

    function students(){
        $data= user::all();
        return view('students',['user'=>$data]);
    }

    function showData($id){
        $data= user::find($id);
        return view('edit',['data'=>$data]);
    }

    function edit(Request $req){
        $data=user::find($req->id);
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->email=$req->email;
        $data->save();
        return redirect('students');
    }

    function delete($id){
        $data=user::find($id);
        $data->delete();
        return redirect('students');
    }


    }
