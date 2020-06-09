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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/plants', 'PlantsController@index');

Route::get('/newplant', 'PlantsController@create');
Route::post('/newplant', 'PlantsController@store')->name('newplant.store');

Route::get('/newpost', 'PostsController@create');
Route::post('/newpost', 'PostsController@store')->name('newpost.store');



// Rotas antigas



// Route::get('/cadastro-planta', function() {
//     return view('cadastro-planta');
// });

// Route::get('/cadastro-usuario', function() {
//      return view('cadastro-usuario');
//  });

//  Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/novo-post', function() {
//     return view('novo-post');
// });

// Route::get('/perfil-planta', function() {
//     return view('perfil-planta');
// });

// Route::get('/post', function() {
//     return view('post');
// });