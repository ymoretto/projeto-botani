<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profile', [
            'user' => $user,
        ]);
    }

    public function store() {
        return view('/editprofile');
    }

}

//uma outra forma de encontra ro user seria:
    // \App\User::find($user);