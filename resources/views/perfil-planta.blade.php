@extends ('menu-usuario')

<section id="info-planta">
    <div class="container">
        <div class="row">
            <h2 class="mt-4 mb-3 titulo"> Cacilda </h2>
        </div>

        <div class="row">
            <div class="col text-center"> <!-- div da imagem de perfil da planta -->
                <img class="img-fluid plant-image" src="images/jiboia.jpeg" alt="Imagem da Cacilda"> <!-- tirei img-fluid -->
                <!-- a imagem está configurada para mudar de tamanho com media query -->
                <!-- seria legal pensar em uma forma de automatizar isso -->
            </div>
            <div class="col plant-description"> <!-- div das informações da planta -->
                <p>Uma descrição da planta aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <ul>
                  <li>Espécie</li>
                  <li>Desde dd/mm/aa</li>
                  <li>4 flores</li>
                  <li>Algo do tipo</li>
                </ul>
                <a name="editarPlanta" id="editarPlanta" class="btnEditarPlanta" href="#" role="button">Editar Planta</a>
                <a name="excluirPlanta" id="excluirPlanta" class="btnExcluirPlanta" href="#" role="button">Excluir Planta</a>
            </div> <!-- close plant col -->

        </div> <!-- close row -->

    </div> <!-- close container -->

    <div class="space"></div> <!--Serve apenas para criar um espaço entre os blocos-->

    <div class="container">
        <div class="row">
            <h2 class="titulo">Linha do Tempo</h2>
        </div>
        <div class="row">
            <div class="timelinePlanta">
                <a href="#"><img class="img-pq" src="images/jiboia.jpeg" alt=""></a>
                
                <?php 
                    for ($i=0; $i < 9; $i++) { 
                        echo "<a href='#'><img class='img-pq' src='images/jiboia.jpeg'></a>";
                    }
                ?>
            </div>
        </div>
    </div>
</section>

@extends ('footer')