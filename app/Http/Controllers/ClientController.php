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
            return view('cart');
        }
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('cart',[
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
    public function addByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->addByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
    public function removeItem($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->removeItem($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
    public function checkout(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('checkout',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
    public function about(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('about',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $products = Product::where('name','like',"%$search%")->get();
        $count = $products->count();
        return view('search',[
            'products'=>$products,
            'count'=>$count
        ]);
    }
    public function profile(){
        return view('profile');
    }
}
