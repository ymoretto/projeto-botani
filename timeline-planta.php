<?php require_once("menu-usuario.php") ?>
<div class="row justify-content-start">
    <div class="tituloPlaceholder">
        <h2>Minhas Plantas</h2>
    </div>
</div>

<div id="carouselPlantas" class="carousel slide" data-ride="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">

                <!-- Área da Imagem e descrição -->
                <div class="row">

                    <div class="col-md-8 text-center">
                        <img class="img-fluid plant-image" src="images/jiboia.jpeg" alt="">
                    </div>

                    <div class="col-md-4">
                        <h3 class="my-3 titulosPlanta">Gertrudes</h3>
                        <p>Uma descrição da planta aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                            viverra
                            euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in
                            adipiscing et, interdum
                            nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                        <ul>
                            <li>Espécie</li>
                            <li>Desde dd/mm/aa</li>
                            <li>4 flores</li>
                            <li>Algo do tipo</li>
                        </ul>
                    </div>

                </div>
                <!-- Fim da área da imagem  -->

                <!-- Linha do tempo da planta -->
                <h3 class="my-4 titulosPlanta">Linha do Tempo de Gertrudes</h3>

                <div class="row">
                    <div class="container">
                        <div class="timeline">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                            <img class="img-pq" src="images/jiboia.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Fim da linha do tempo -->

            </div> <!-- div que fecha o container -->
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselPlantas" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselPlantas" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php require_once("footer.php") ?>