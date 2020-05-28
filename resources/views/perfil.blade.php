@extends ('menu-usuario')

<section id="info-usuario">
    <div class="container">
        <div class="row mt-3">
            <div class="col mt-5">
                <div class="imgUserPlaceholderPerfil">
                    <img class="img-user" src="images/perfil-botania-planticia.jpg" alt="Foto de Perfil">
                </div>
            </div>

            <div class="col-md-9 basic-info-text">
                <h2 class="nome-usuario titulo">Botânia Plantícia</h2>
                <a name="editarPerfil" id="editarPerfil" class="btnEditarPerfil" href="#" role="button">Editar Perfil</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Desde Janeiro/2020</li>
                    <li class="list-group-item">1 Planta</li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam ad, fugit quasi odit provident
                        eaque voluptas ea numquam totam laudantium? Voluptate cumque eaque eveniet temporibus similique
                        ducimus ex asperiores accusantium!
                        <!-- <br><span class="badge badge-primary badge-pill">editar</span> -->
                    </li>

                </ul>
                <div class="badges-session">
                    <strong>Badges</strong>
                    <div class="container">
                        <span>
                            <img class="accomplishment" src="images/badges/051-ecologism-23.png" alt="primeira planta">
                        </span>
                        <!-- not today courona vairus, not today-->
                        <span>
                            <img class="accomplishment" src="images/badges/051-ecologism-9.png" alt="primeira planta">
                        </span>
                        <span>
                            <img class="accomplishment" src="images/badges/051-ecologism-18.png" alt="primeira planta">
                        </span>
                        <?php  
                            for ($i=0; $i < 5; $i++) { 
                                echo "<span>
                                <img class='accomplishment' src='images/badges/051-ecologism-18.png' alt='primeira planta'>
                                </span>";
                            }
                        ?>
                    </div>
                </div>
            </div> <!-- close row -->
        </div> <!-- close container -->
</section>

<section id="plantas-usuario">
    <div class="container">
        <div class="row">
            <h2 class="titulo h2-perfil">Plantas de Plantícia</h2>
        </div>
        <div class="row">
            <div class="plantasEAmigosUsuario">
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
<section id="amigos-usuario">
    <div class="container">
        <div class="row">
            <h2 class="titulo h2-perfil">Amigos de Plantícia</h2>
        </div>
        <div class="row">
            <div class="plantasEAmigosUsuario">
                <a href="#"><img class="img-pq-amigos" src="images/helo.jpeg" alt="Heloísa Medeiros"></a>

                <?php 
                    for ($i=0; $i < 9; $i++) { 
                        echo "<a href='#'><img class='img-pq-amigos' src='images/helo.jpeg' alt='Heloísa Medeiros'></a>";
                    }
                ?>
            </div>
        </div>
    </div>
</section>


@extends ('footer')