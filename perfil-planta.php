<?php require_once("menu-usuario.php") ?>

<section id="info-planta">
    <div class="container">
        <div class="row">
            <h2 class="mt-4 mb-3"> Cacilda </h2>
        </div>

        <div class="row">
            <div class="col text-center"> <!-- div da imagem de perfil da planta -->
                <img class="img-fluid image-border plant-image" src="images/jiboia.jpeg" alt="Imagem da Cacilda"> <!-- tirei img-fluid -->
                <!-- a imagem está configurada para mudar de tamanho com media query -->
                <!-- seria legal pensar em uma forma de automatizar isso -->
            </div>
            <div class="col plant-description"> <!-- div das informações da planta -->
                <h3 class="my-3">Nome da Planta</h3>
                <p>Uma descrição da planta aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <ul>
                  <li>Espécie</li>
                  <li>Desde dd/mm/aa</li>
                  <li>4 flores</li>
                  <li>Algo do tipo</li>
                </ul>
            </div> <!-- close plant col -->
        </div> <!-- close row -->

    </div> <!-- close container -->

    <div class="space"></div> <!--Serve apenas para criar um espaço entre os blocos-->

    <div class="container">
        <div class="row timeline-row">
            <h2>
                Timeline da Cacilda
            </h2>
            <div class="timeline">
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


</section>


<?php require_once("footer.php") ?>