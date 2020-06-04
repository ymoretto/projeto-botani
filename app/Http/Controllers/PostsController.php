<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create() {
        return view('posts/create');
    }

    public function store() {

        $data = request()->validate([
            'qual-planta' => 'required',
            'description' => 'required',
            'image-post' => ['required', 'image'],
        ]);

        \App\Post::create($data);

        return request()->all();
    }
}
