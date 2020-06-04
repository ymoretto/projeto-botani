@extends ('functions')

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Fim do Boostrap -->
  <link rel="shortcut icon" href="images/menu-icon.svg" sizes="32x32" type="image/png">
  <link rel="stylesheet" href="{{ asset('css/geral-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/menu-usuario-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/perfil-usuario-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/perfil-planta-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/listaPlantas-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cadastro-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/novo-post-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/feed-style.css') }}">
  

  <title>Botani</title>
</head>
<body>

<!-- [Menu de Navegação] -->


<header>

    <nav class="transparent navbar navbar-expand-lg navbar-light row d-flex justify-content-center">

        <a class="navbar-brand" href="home">
            <img src="{{ asset('images/botani-logo-folha.png') }}" alt="Botani" class="logo-header">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse nav-text" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="perfil">Meu Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plants">Minhas Plantas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notificações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Amigos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feed">Feed</a>
              </li>

              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
                  @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
              @endguest              
            </ul>
        </div>

    </nav>
  </header>