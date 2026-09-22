<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function create(){
        //id //name //precio //descrip //categoria //urlimagen
        return view('product.create');
    }

    public function show($idProduct){
        //id //name //precio //descrip //categoria //urlimagen
        return view('product.show');
    }
}