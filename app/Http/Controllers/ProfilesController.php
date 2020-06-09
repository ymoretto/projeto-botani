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
}

//uma outra forma de encontra ro user seria:
    // \App\User::find($user);