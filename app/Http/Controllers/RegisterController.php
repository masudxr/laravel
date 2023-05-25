<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attribute = request()->validate([
            'name'=> 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);
        
        $user = User::create($attribute);

        auth()->login($user);

        session()->flash('success', 'Your Account Has Been Created!');

        return redirect('/');
    }
}
