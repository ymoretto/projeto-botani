<?php require_once("header.php") ?>

<!-- Index -->

<section id="bannerHome">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active home-carousel">
                <img class="d-block w-100" src="images/jardim.png" alt="First slide">
                <div class="carousel-caption image-text col-lg-8 text-center d-none d-md-block">
                    <h5 class="carousel-text">Grow your plants.</h5>
                    <h5 class="carousel-text">Grow your community.</h5>
                    <a href="login.php"><button class="btn btn-banner-home">Faça Parte</button></a>
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
                <p>O Projeto Botani nasceu por causa do projeto integrador, desenvolvido no curso de Full Stack da
                    Digital House. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deserunt, eos dolorem
                    delectus sed est vitae quam nisi laborum esse quod dolor impedit ipsam! Expedita adipisci voluptates
                    alias veritatis similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident rerum
                    quos ut, laborum distinctio saepe nulla officiis accusantium a fuga consectetur reiciendis porro
                    molestias autem doloremque animi ipsa culpa dicta! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. </p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="images/growing-plant.gif" style="width:500px" alt="gif-planta">
            </div>
        </div>
    </div>
</section>

<!-- Fim da Sections de Sobre -->

<br>
<br>

<!-- Começo da Sections de Contato -->

<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="titulo">Entre em contato</h2>
                <form class="formulario">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn button-home form-contato">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Fim da Sections de Contato -->

<?php require_once("footer.php") ?>