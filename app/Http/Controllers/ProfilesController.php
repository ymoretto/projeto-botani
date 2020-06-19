<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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

    public function viewImage(User $user)
    {
        return view('/editimage');

    }

    public function editImage(User $user)
    {
        $data = request()->validate([
            'image' => ['required','image'],
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');

            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile()->create([
            'image' => $imagePath,
        ]);

        return redirect('/profile/'. auth()->user()->id);
    }

}

