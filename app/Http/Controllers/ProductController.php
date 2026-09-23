<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    $listaDeProductos = Product::all()
        ->unique('name')
        ->take(3);

    return view('product.index', compact('listaDeProductos'));
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