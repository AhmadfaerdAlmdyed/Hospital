<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashbord(){
        return view('admin.home');
    }
    public function login(){
      return view('admin.auth.login');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email|string',
            'password'=>'required|string',
            'remember'=>'in:on',
        ]);
          $credentials=[
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
          ];

          if(Auth::guard('admin')->attempt($credentials,true))
          {
            session()->flush('massage','loinged Successfully');
           return view('admin.home');
          }
         else{
          return redirect()->back();
        } 
    }
    public function changePassword(){
            return view('admin.auth.change_password');
        }
        public function psotPassword(Request $request)
        {
            $request->validate([
                'password'=> 'required|password:admin',
                'new-password' => 'required|string|confirmed',
            ]);
            $user = auth()->user();
            $user->password = Hash::make($request->get('new-password'));
            $user->save();
            return view('admin.home');
          }
    public function logout(Request $request)
        {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
}
