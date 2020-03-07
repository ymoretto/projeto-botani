<?php require_once("header.php") ?>

<!-- Login -->
<section class="login login-image">
    <div class="row no-gutters">

        <!-- Lado Esquerdo da Tela [Login] -->
        <div class="col-xl">
            <div class="halfpage d-flex justify-content-center align-items-center">
                <div class="formplaceholder">
                    <form method="get" class="formularioLogin">
                        <div class="form-group">
                            <h2 class="tituloLogin">Login</h2>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="name@email.com"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordLogin" id="passwordLogin" class="form-control"
                                placeholder="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btnLogin">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Lado Direito da Tela [Cadastro] -->
        <div class="col-xl">
            <div class="halfpage d-flex justify-content-center align-items-center">
                <div class="formplaceholder">
                    <form method="post" class="formularioLogin">
                        <div class="form-group">
                            <h2 class="tituloLogin">Cadastre-se</h2>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="someemail@email.com"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordLogin" id="passwordLogin" class="form-control"
                                placeholder="password">
                        </div>
                        <div class="form-group">
                            <a href="cadastro.php"><button class="btn btn-primary btnLogin">Entrar</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Fim da Section de Login -->

<?php require_once("footer.php") ?>