<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store (Request $request){
        $form = new Product();
        $form-> email= $request-> email;
        $form -> pswd=$request ->pswd;
        $form->save();
    }

    public function index(){
        $product =Product::all();
        return view('table',compact('product'));
    }
}
