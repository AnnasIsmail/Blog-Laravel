<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    public function index(){
        return view('sign-in.index', [
            'title' => 'Sign In'
        ]);
    }

    public function authenticate(Request $request){
        $validationData = $request->validate([
            'username' => ['required', 'min:8', 'max:20', 'unique:users'],
            'password' => 'required|min:5|max:20'
        ]); 
    }
}
