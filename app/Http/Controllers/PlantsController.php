<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

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

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200,1200); //esta linha usa uma biblioteca de imagens chamada Intervetion para alterar o tamanho das imagens publicadas
        $image->save();


        auth()->user()->plants()->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'species' => $data['species'],
            'image' => $imagePath,
        ]);

       return redirect('/profile/'. auth()->user()->id);
    }

    public function index($user){
        $user = User::findOrFail($user);

        return view('plants', [
            'user' => $user,
        ]);
    }


    public function show(\App\Plant $plant) 
    {
        return view('plantprofile',compact('plant'));
        // o compact() é a versão curta do array que está no ProfileController
    }

}
