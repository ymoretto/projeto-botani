<?php require_once("menu-usuario.php") ?>

<div class="row justify-content-start">
    <div class="tituloPlaceholder">
        <h2>Minhas Plantas</h2>
    </div>
</div>
<div class="row listaPlantas">

    <!-- CARD -->
    <a href="timeline-planta.php" target="_blank">
        <div class="card cardPlanta">
            <img class="card-img-top" src="images/jiboia.jpeg" alt="Foto da sua planta">
            <div class="card-body">
                <p class="card-text text-center">Gertrudes</p>
            </div>
        </div>
    </a>
    <!-- CARD -->

    <!-- SPAWN DE CARDS DE TESTE -->
    <?php 
    for ($i=0; $i <= 10 ; $i++) { 

        echo "<a href='timeline-planta.php' target='_blank'>
        <div class='card cardPlanta'>
            <img class='card-img-top' src='images/jiboia.jpeg' alt='Foto da sua planta'>
            <div class='card-body'>
                <p class='card-text text-center'>Gertrudes</p>
            </div>
        </div>
        </a>";

    }
?>
    <!-- SPAWN DE CARDS DE TESTE -->
</div>

<?php require_once("footer.php") ?>