<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        //validate form
        $this->validate(request(),[
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //create user
        $user = User::create(request(['name','email','password']));

        //sign in
        auth()->login($user);

        //redirect to the home page
        return redirect()->home();
    }
}
