<?php require_once("header.php") ?>
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

<?php require_once("footer.php") ?>