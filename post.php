<?php require_once("menu-usuario.php") ?>

<section class="pageFeed">
    <div class="feedTimelineContainer">

        <!-- INICIO DE UM POST -->
        <div class="post">
            <div class="row no-gutters">
                <div class="col-lg-6 postPhotoPlaceholder">
                    <img src="images/jiboia.jpeg">
                </div>
                <div class="col-lg-6 dadosPostPlaceholder">
                    <div class="dadosUsuarioPostPlaceholder">
                        <img class="userPostIcon" src="images/perfil-botania-planticia.jpg">
                        <p><b>botania_planticia</b></p>
                        <a name="excluirPost" id="excluirPost" class="btnExcluirPost" href="#" role="button">Editar Perfil</a>
                    </div>
                    <div class="postDescriptionPlaceholder">
                        <p><b>Gertrudes - Samambaia</b></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id eum quae hic. Beatae illo
                            architecto optio! Ab, autem adipisci voluptatibus animi perferendis inventore alias cumque,
                            provident deserunt, hic porro architecto.</p>
                        <small>21 de março de 2020</small>
                    </div>
                    <div class="postActionsPlaceholder">
                        <img class="postActionIcon" src="images/hearticon.svg">
                        <button data-toggle="modal" data-target="#newCommentModal">
                            <img class="postActionIcon" src="images/commenticon.svg">
                        </button>
                    </div>
                    <div class="postCommentsPlaceholder">
                        <p><b>Comentários</b></p>
                        <div class="postComment">
                            <p><b>helomdrs</b></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FINAL DE UM POST -->
    </div>
</section>

<!-- MODAL DE FAZER COMENTÁRIO -->
<div class="modal fade" id="newCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Novo comentário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="newComment" id="newComment"
                            placeholder="Comente aqui"></textarea>
                        <!-- <button type="submit" class="btn btnSubmitComment">Publicar</button> -->
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Publicar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM DO MODAL DE FAZER COMENTÁRIO -->


<?php require_once("footer.php") ?>