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
  <link rel="stylesheet" href="css/geral-style.css">
  <link rel="stylesheet" href="css/menu-usuario-style.css">
  <link rel="stylesheet" href="css/perfil-usuario-style.css">
  <link rel="stylesheet" href="css/perfil-planta-style.css">
  <link rel="stylesheet" href="css/listaPlantas-style.css">
  <link rel="stylesheet" href="css/cadastros-style.css">
  <link rel="stylesheet" href="css/novo-post-style.css">
  <link rel="stylesheet" href="css/feed-style.css">
  

  <title>Botani</title>
</head>
<body>

<!-- [Menu de Navegação] -->


<header>

    <nav class="transparent navbar navbar-expand-lg navbar-light row d-flex justify-content-center">

        <a class="navbar-brand" href="index">
            <img src="images/botani-logo-folha.png" alt="Botani" class="logo-header">
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
                <a class="nav-link" href="listaPlantas">Minhas Plantas</a>
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
            </ul>
        </div>

    </nav>
  </header>