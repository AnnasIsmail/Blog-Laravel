<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SignUpController extends Controller
{
    public function index(){
        return view('sign-up.index',[
            "title" => "Sign Up",
        ]);
    }

    public function store(Request $request){

        $validationData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:8', 'max:20', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20'
        ]); 

        // $validationData['password'] = bcrypt($validationData['password']);
        
        $validationData['password'] = Hash::make($validationData['password']);

        User::create($validationData);

        // $request->session()->flash('success', 'Registration Successfully. Please Sign In');

        return redirect('/sign-in')->with('success', 'Registration Successfully. Please Sign In');
    }   

}