<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function addProduct(){
        return view('admin.addProduct');
    }
    public function product(){
        $products = Product::orderByDesc('id')->get();
        return view('admin.products',[
            'products'=>$products
        ]);
    }
    public function editProduct($id){
        $edit = Product::find($id);
        return view('admin.editProduct',[
            'edit'=>$edit
        ]);
    }
    public function eProduct(Request $request){
        $edit = Product::find($request->pId);
        $edit->name = $request->name;
        $edit->topic = $request->topic;
        $edit->desc = $request->desc;
        $edit->amount = $request->amount;
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }
        $edit->save();
        return redirect(url('products'))->with('success','PRODUCT EDITED SUCCESS');
    }
    public function deleteProduct($id){
        $del = Product::find($id);
        $del->delete();
        return redirect()->back()->with('success','PRODUCT DELETED SUCCESS');
    }
    public function storeProduct(Request $request){
        $store = new Product();
        $store->name = $request->name;
        $store->topic = $request->topic;
        $store->desc = $request->desc;
        $store->amount = $request->amount;
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image = $filename;
        }
        if ($request->image1) {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image1 = $filename;
        }
        if ($request->image2) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image2 = $filename;
        }
        if ($request->image3) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image3 = $filename;
        }
        if ($request->image4) {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image4 = $filename;
        }
        $store->save();
        return redirect()->back()->with('success','PRODUCT ADDED SUCCESS');
    }
    public function placeOrder(Request $request){
        if (Auth::check()){
            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
                foreach ($checkouts as $checkout) {
                    $phone = $request->phone;
                    $order = new Order();
                    $order->user_id = \Illuminate\Support\Facades\Auth::id();
                    $order->product_id = $checkout['item']['id'];
                    $order->order_quantity = $checkout['quantity'];
                    $order->region = $request->region;
                    $order->country = $request->country;
                    $order->save();
                }
                $request->session()->forget('cat');
                return redirect()->back()->with('success','ORDER PLACED SUCCESSFULLY');
        }
        else{
            $register = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>$request->role,
                'phone'=>$request->phone,
                'role'=>$request->role,
                'password'=>Hash::make($request->password),
            ]);
            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            foreach ($checkouts as $checkout) {
                $phone = $request->phone;
                $order = new Order();
                $order->user_id = $register->id;
                $order->product_id = $checkout['item']['id'];
                $order->order_quantity = $checkout['quantity'];
                $order->region = $request->region;
                $order->country = $request->country;
                $order->save();
            }
            $request->session()->forget('cat');
            return redirect()->back()->with('success','ORDER PLACED SUCCESSFULLY');
        }
    }
}
