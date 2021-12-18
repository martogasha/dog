<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        $store->desc = $request->desc;
        $store->amount = $request->amount;
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $store->image = $filename;
        }
        $store->save();
        return redirect()->back()->with('success','PRODUCT ADDED SUCCESS');
    }
}
