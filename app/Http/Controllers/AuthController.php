<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function reg(Request $request){
        $register = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->back()->with('success','REGISTERED SUCCESS');
    }
    public function log(Request $request){
        $user = User::where('email',$request->email)->first();
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            if ($user->role==0){
                return redirect(url('admin'));
            }
            else{
                return redirect(url('checkout'));
            }
        }
        else{
            return redirect()->back()->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
    public function updateProfile(Request $request){
        $getUserId = User::find(Auth::user()->id);
        $getUserId->name = $request->name;
        $getUserId->email = $request->email;
        $getUserId->phone = $request->phone;
        $getUserId->password = Hash::make($request->password);
        $getUserId->save();
        return redirect()->back()->with('success','INFORMATION EDITED SUCCESS');
    }
}
