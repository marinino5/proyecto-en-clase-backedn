<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "Show Products";
    }

    public function create(){
        return "Form to create Product";
    }

    public function show($idProduct){
        return "detail of a product: $idProduct";
    }
}