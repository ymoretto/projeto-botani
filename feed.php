<?php require_once("menu-usuario.php") ?>
<section class="feedContainer">
    <div class="timeline">
        <div class="posts">

            <!-- POST -->
            <div class="post">
                <div class="headerPost">
                    <img class="userIcon" src="images/perfil-botania-planticia.jpg">
                    <p><strong>botania_planticia</strong></p>
                </div>
                <div class="imagePost">
                    <img src="images/jiboia.jpeg">
                </div>
                <div class="postActions">
                    <!-- gerar isso apenas na pagina do feed -->
                    <img src="images/hearticon.svg">
                    <img src="images/commenticon.svg">
                </div>
                <div class="postDescription">
                    <p><strong>botania_planticia</strong></p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio aliquam cumque, laborum illo aut
                        impedit sed voluptates fugiat eius ducimus! Magnam reiciendis quam praesentium exercitationem
                        nostrum quas recusandae, cum totam.</p>
                </div>
                <div class="postComments">
                    <p><strong>Comentários</strong></p>
                    <div class="comment">
                        <p><strong>helomdrs</strong></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <textarea class="form-control" name="newComment" id="newComment" col="100%" placeholder="Comente aqui"></textarea>
                            <button type="submit" class="btn">Publicar</button>
                        </div>
                        
                    </form>
                </div>
            </div>

            <!-- POST -->
        </div>
    </div>
</section>


<?php require_once("footer.php") ?>