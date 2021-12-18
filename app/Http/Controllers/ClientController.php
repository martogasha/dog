<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome',[
            'products'=>$products
        ]);
    }
    public function shop(){
        return view('shop');
    }
    public function productDetail($id){
        $product = Product::find($id);
        return view('productDetail',[
            'product'=>$product
        ]);
    }
    public function productD(){
        return view('admin.productD');
    }
}
