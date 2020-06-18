<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;
use App\User;
use App\Posts;

// colocar o filtro da imagem da yolanda no controller do post para puxar todas as plantas daquele usuario

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

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

        return redirect('/profile/'. auth()->user()->id);

    }

    public function index() {
        return view('posts');
    }
}
