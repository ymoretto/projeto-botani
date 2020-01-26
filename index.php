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
  <link rel="stylesheet" href="css/header-style.css">
  <link rel="stylesheet" href="css/index-style.css">


  <title>Botani</title>
</head>
<body>

<!-- Menu de Navegação -->
<header class="container">
  <nav class="transparent navbar  navbar-expand-lg navbar-light row d-flex justify-content-center">

      <div class="nav-left" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#sobre">Sobre Nós</a>
              </li>
          </ul>
      </div>

      <div class="navbar-logo">
        <a class="navbar-brand" href="index.php">
            <img src="images/botani-logo-folha.png" alt="Botani" class="logo-header">
        </a>
      </div>

      <div class="nav-left" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link nav-right" href="#login">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-right" href="#contato">Contato</a>
              </li>
          </ul>
      </div>
      
  </nav>
  </header>

<!-- Index -->

<section id="bannerHome">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/jardim.png" alt="First slide">
                <div class="carousel-caption image-text col-lg-8 text-center d-none d-md-block">
                    <h5 class="carousel-text">Grow your plants.</h5>
                    <h5 class="carousel-text">Grow your community.</h5>
                    <!-- <p class="carousel-text">Grow your community.</p> -->
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Fim do Index -->

<!-- Início Section de Sobre -->

<section id="sobre">
    <div class="container bloco-sobre">
        <div class="row">
            <div class="col align-middle texto-sobre">
                <h2 class="titulo"> Conheça o Projeto Botani </h2>
                <p>O Projeto Botani nasceu por causa do projeto integrador, desenvolvido no curso de Full Stack da Digital House Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deserunt, eos dolorem delectus sed est vitae quam nisi laborum esse quod dolor impedit ipsam! Expedita adipisci voluptates alias veritatis similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident rerum quos ut, laborum distinctio saepe nulla officiis accusantium a fuga consectetur reiciendis porro molestias autem doloremque animi ipsa culpa dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col">
                <img src="images/growing-plant.gif" style="width:500px" alt="gif-planta">
            </div>
        </div>
    </div>
</section>

<!-- Fim da Sections de Sobre -->

<!-- Começo da Sections de Contato -->

<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="titulo">Entre em contato</h2>
                <form class="formulario">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary form-contato">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Fim da Sections de Contato --> 

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Fim do Bootstrap -->

</body>
</html>