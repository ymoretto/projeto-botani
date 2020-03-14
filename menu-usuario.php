<?php require_once("functions.php") ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Fim do Boostrap -->
  <link rel="shortcut icon" href="#" sizes="32x32" type="image/png">
  <link rel="stylesheet" href="css/geral-style.css">
  <link rel="stylesheet" href="css/menu-usuario-style.css">
  <link rel="stylesheet" href="css/perfil-usuario-style.css">
  <link rel="stylesheet" href="css/perfil-planta-style.css">
  <link rel="stylesheet" href="css/feed-style.css">

  <title>Botani</title>
</head>
<body>

<!-- [Menu de Navegação] -->


<header>

    <nav class="transparent navbar  navbar-expand-lg navbar-light row d-flex justify-content-center">
        <a class="navbar-brand" href="index.php">
            <img src="images/botani-logo-folha.png" alt="Botani" class="logo-header">
        </a>
  
        <div class="collapse navbar-collapse nav-text" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="perfil-usuario.php">Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil-planta.php">Plantas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notificações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Amigos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feed.php">Main</a>
              </li>
            </ul>
        </div>

    </nav>
  </header>