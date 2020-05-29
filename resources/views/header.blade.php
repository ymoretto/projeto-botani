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
  <link rel="stylesheet" href="css/header-style.css">
  <link rel="stylesheet" href="css/index-style.css">
  <link rel="stylesheet" href="css/login-style.css">
  <link rel="stylesheet" href="css/cadastros-style.css">


  <title>Botani</title>
</head>
<body>

<!-- Menu de Navegação -->
<header class="container">
  <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="index.php">
            <img src="images/botani-logo-folha.png" alt="Botani" class="logo-header">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link header-text" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link header-text" href="index.php#sobre">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-right header-text" href="index.php#contato">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-right header-text loginBtn" href="login"><strong>Entrar</strong></a>   
              </li>
          </ul>
      </div>
      
  </nav>
  </header>