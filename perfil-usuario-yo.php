<?php require_once("menu-usuario.php") ?>

<section id="info-usuario">
    <div class="container">
        <div class="row mt-3">
            <div class="col mt-5">
                <img class="img-user" src="images/perfil-botania-planticia.jpg" alt="Foto de Perfil">
            </div>

            <div class="col-md-9 basic-info-text">
                <h2 class="nome-usuario">Botânia Plantícia</h2>
                <hr class="linha-user">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item detail">Member Since 2020</li>
                    <li class="list-group-item detail">Plants: 1</li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam ad, fugit quasi odit provident eaque voluptas ea numquam totam laudantium? Voluptate cumque eaque eveniet temporibus similique ducimus ex asperiores accusantium!
                        <br><span class="badge badge-primary badge-pill">editar</span>
                    </li>
                
                </ul>
                <div class="badges-session">
                    <strong>Badges:</strong>
                    <span>
                        <img class="accomplishment" src="images/badges/051-ecologism-23.png" alt="primeira planta">
                    </span> <!-- if this code is not finished, it's because coronavirus got me before I could finished it-->
                    <span>
                        <img class="accomplishment" src="images/badges/051-ecologism-9.png" alt="primeira planta">
                    </span> 
                    <span>
                        <img class="accomplishment" src="images/badges/051-ecologism-18.png" alt="primeira planta">
                    </span>
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

            <div class="col">

                <div class="timeline">
                    <img class="img-pq" src="images/jiboia.jpeg" alt="">
                    <img class="img-pq" src="images/jiboia.jpeg" alt="">
                    <img class="img-pq" src="images/jiboia.jpeg" alt="">
                </div>

            </div> <!-- close col -->
        </div> <!-- close row-->

    </div> <!-- close container -->
</section>


<section id="amigos-usuario">
    <div class="container">
        <div class="row">
            <h2 class="titulo h2-perfil">Amigos de Plantícia</h2>
        </div>

        <div class="row">

            <div class="col">

                <div class="timeline">
                    <img class="img-pq friend-image" src="images/helo.jpeg" alt="">
                    <img class="img-pq friend-image" src="images/helo.jpeg" alt="">
                    <img class="img-pq friend-image" src="images/helo.jpeg" alt="">
                </div>

            </div> <!-- close col -->
        </div> <!-- close row-->

    </div> <!-- close container -->
</section>


<?php require_once("footer.php") ?>