<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $product = Product::where('id','>',1)->first();
        return view('productDetail',[
            'product'=>$product
        ]);
    }
}
