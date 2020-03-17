<?php require_once("menu-usuario.php") ?>
<section>
    <article class="holepage">
        <h2 class="titulo tituloPlanta">Nova planta</h2>
    </article>
    <article class="cadastroPlanta">
        <form action="" enctype="multipart/form-data" method="post" class="formulario">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imagemPlanta" name="imagemPlanta">
                            <label class="custom-file-label" for="imagemPlanta">Foto da planta</label>
                        </div>
                    </div>
                    <div class="imagemPlaceholder">
                        <img class="fotoNovaPlanta" src="images/jiboia.jpeg" alt="Foto da nova planta">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dadosPlanta">
                        <div class="form-group">
                            <label for="apelidoPlanta" class="labels">Apelido</label>
                            <input type="text" name="apelidoPlanta" id="apelidoPlanta" class="form-control"
                                placeholder="Gertrudes">
                        </div>
                        <div class="form-group">
                            <label for="sobrePlanta" class="labels">Sobre</label>
                            <textarea class="form-control" name="sobrePlanta" id="sobrePlanta"
                                rows="5">Gertrudes foi um presente dos meus pais para minha nova casa! Mas meu gato quer comer ela.....</textarea>
                        </div>
                        <div class="form-group">
                            <label for="especiePlanta" class="labels">Espécie</label>
                            <select class="form-control" name="especiePlanta" id="especiePlanta">
                                <option>Orquídea</option>
                                <option>Samambaia</option>
                                <option>Rosa</option>
                            </select>
                        </div>
                        <div class="btnPlaceholder">
                            <button type="submit" class="btn btnCadastro">Cadastrar Planta</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </article>
</section>












<?php require_once("footer.php") ?>