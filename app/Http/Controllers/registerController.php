<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;


class registerController extends Controller
{
    public function index(){ 
        return view('register',["title" => "Register"]);
    }

    public function store(Request $request){
        $successRegist=$request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required|max:255',
            'age' => 'required|numeric|min:18',
            'password' => 'required|min:8|max:30',
            'confirmPassword' => 'same:password'
        ]);

        $successRegist['password'] = bcrypt($successRegist['password']);
        $successRegist['confirmPassword'] = bcrypt($successRegist['confirmPassword']);

        User::create($successRegist);
        return redirect('/login')->with('success', 'Register Success!');
    }


}
