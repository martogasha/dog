<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function shop(){
        return view('shop');
    }
    public function productDetail(){
        return view('productDetail');
    }
}
