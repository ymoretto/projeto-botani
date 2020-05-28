<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/listaPlantas', function () {
    return view('listaPlantas');
});

Route::get('/cadastro-planta', function() {
    return view('cadastro-planta');
});

Route::get('/cadastro-usuario', function() {
    return view('cadastro-usuario');
});

Route::get('/novo-post', function() {
    return view('novo-post');
});

Route::get('/perfil-planta', function() {
    return view('perfil-planta');
});

Route::get('/post', function() {
    return view('post');
});