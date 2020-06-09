<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;
use App\User;

class PostsController extends Controller
{
    public function create() {
        return view('newpost');
    }

    public function store() {

        $data = request()->validate([
            'plant_id' => 'required',
            'description' => 'required',
            'image' => ['required', 'image'],
        ]);

        //código abaixo serve para autenticar o usuário
        //auth()->plant()->posts()->create($data);

        \App\Post::create($data);

        dd(request()->all());
    }
}
