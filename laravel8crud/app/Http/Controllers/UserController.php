<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class UserController extends Controller
{
    public function users(){
        $allusers=Crud::all();
        return view('users',compact('allusers'));
    }

    public function addData(){
        return view('add_data');
    }

    public function storeData(Request $request){
        
        $crud=new Crud();
        $crud->email=$request->email;
        $crud->password=$request->password;
        $crud->save();
        Session::flash('msg','Data Successfully Added');

        return redirect()->back();
    }
}
