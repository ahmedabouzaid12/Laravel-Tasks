<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Mail\SendVerificationCodeEmail;  
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;  



class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        return view('front.auth.register');
    }

    public function storeUser(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $user = User::create($data);

        Mail::to($user->email)->send(new SendVerificationCodeEmail($user));

        
        Auth::login($user);
    
        
        return redirect()->route('home');
    }
    

    public function login(Request $request)
    {
        return view('front.auth.login');
    }

    public function loginUser(Request $request){
        $data = $request->validate([
            
            'email' =>'required|email',
            'password' => 'required|min:8',
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            return back()->with('error', 'Invalid credentials');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
