<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use AuthenticatesUsers;


class loginController extends Controller
{
    public function index(){
        return view('login.index',["title" => "Login"]);
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->hasVerifiedEmail()) {
            $this->guard()->logout();
            return redirect()->route('login')->with('warning', 'Please verify your email before logging in.');
        }
    
        return redirect()->intended($this->redirectPath());
    }

    public function auth(Request $request){

        $cred = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if(Auth::attempt($cred)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('error', 'Login Failed, Username or Password Wrong!');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
