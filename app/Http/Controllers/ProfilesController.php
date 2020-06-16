<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;


class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); //forma longa de encontrar o user

        //uma outra forma de encontrar o user seria:
        // \App\User::find($user);

        return view('profile', [
            'user' => $user,
        ]);
    }

    public function store() {
        return view('/editprofile');
    }

    public function edit(\App\User $user) //forma rápida de encontrar o user
    {
        return view('editprofile', compact('user'));
    }


    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->update($data);

        return redirect('/profile/'. auth()->user()->id);
    }

}

