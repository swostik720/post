<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect('login');
    }
    public function forgot_password(){
        return view('forgot_password');
    }
    public function index()
    {
        $users = User::with('roles')->get(); // Eager load roles relationship
        return view('index', compact('users'));
    }
}
