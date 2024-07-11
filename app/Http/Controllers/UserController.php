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
    public function forgot_password(){
        return view('forgot_password');
    }
    public function index()
    {
        $users = User::with('roles')->get(); // Eager load roles relationship
        return view('index', compact('users'));
    }
}
