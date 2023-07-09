<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

    class LoginController extends Controller
{
    
    public function index()
    {
     return view('frontend.login&register.login');
    }
    public function create()
    {
        return view('frontend.login&register.register');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|',
            'email'=>'required|email',
            'phone'=> 'required|numeric|min:10',
            'password'=>'required|string',
            'country'=>'required|string'
        ]);
        
        $user=new User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone=$request->get('phone');
        $user->password=Hash::make($request->get('password'));
        $user->country=$request->get('country');
         $seved= $user->save();
         if($seved){    
            session()->flash('massage','user cerated scssesfuly');
           return redirect()->route('loginUesr.index');
        }
    }
    public function LoginUesr(Request $request)
    {
        $request->validate([
            'email'=>'required|email|string',
            'password'=>'required|string',
            'remember'=>'in:on', 
        ]);

        $credentials=[
        'email'=>$request->get('email'),
        'password'=>$request->get('password'),
        ];  
        
        if(Auth::guard('user')->attempt($credentials,true))
        {
        session()->flush('massage','loinged Successfully');
        $user = auth()->user();
        return redirect()->route('profail.index');
        }
        else{
        return redirect()->back();
        }
    }
    public function logoutUesr(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('loginUesr.index');
    }

    public function changePassword()
    {
        return view('frontend.login&register.change_password');
    }

    // public function psotPassword(Request $request)
    //{ 
    //}


}
