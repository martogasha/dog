<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ClientController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome',[
            'products'=>$products
        ]);
    }
    public function shop(){
        $products = Product::all();
        return view('shop',[
            'products'=>$products
        ]);
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
    public function cart(){
        if (!Session::has('cat')){
            return view('client.cart');
        }
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('admin.cart',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function storeCart(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
    }
}
