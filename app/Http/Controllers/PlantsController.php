<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function create() {
        return view('newplant');
    }

    public function store() {

        $data = request()->validate([
            'image' => ['required', 'image'],
            'name' => 'required',
            'description' => 'required',
            'species' => '',
        ]);

        auth()->user()->plants()->create($data);

       return request()->all();
    }

    public function index() {
        return view('plants');
    }
}
