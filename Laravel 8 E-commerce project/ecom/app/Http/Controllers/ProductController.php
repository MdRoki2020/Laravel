<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addToCart(Request $req){
        return 'hello';
    }
}
