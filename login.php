<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fim do Boostrap -->
    <link rel="shortcut icon" href="#" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/geral-style.css">
    <link rel="stylesheet" href="css/header-style.css">
    <link rel="stylesheet" href="css/login-style.css">


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

    <!-- Login -->
    <section class="login">

        <div class="row no-gutters">

            <!-- Lado Esquerdo da Tela [Login] -->
            <div class="col col-md-6">
                <div class="left-side d-flex justify-content-center">
                    <form method="get" class="formularioLogin">
                        <div class="form-group">
                            <h2 class="tituloLogin">Sign in</h2>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="someemail@email.com"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordLogin" id="passwordLogin" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btnLogin">></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Lado Direito da Tela [Cadastro] -->
            <div class="col col-md-6">
                <div class="right-side d-flex justify-content-center">
                    <form method="post" class="formularioLogin">
                        <div class="form-group">
                            <h2 class="tituloLogin">Cadastre-se</h2>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="someemail@email.com"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordLogin" id="passwordLogin" class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="cadastro.php"><button class="btn btn-primary btnLogin">></button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- Fim da Section de Login -->

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Fim do Bootstrap -->

</body>

</html>