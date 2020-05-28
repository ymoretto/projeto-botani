@extends ('menu-usuario')
<section>
    <article class="tituloCadastroBanner bannerCadastroPlanta">
        <h2 class="tituloCadastro">Nova planta</h2>
    </article>
    <article class="cadastroPlaceholder">
        <form action="" enctype="multipart/form-data" method="post" class="formulario">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imagemPlanta" name="imagemPlanta">
                            <label class="custom-file-label" for="imagemPlanta">Foto da planta</label>
                        </div>
                    </div>
                    <div class="imagemCadastroPlaceholder">
                        <img class="novaFotoCadastro" src="images/jiboia.jpeg" alt="Foto da nova planta">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dadosCadastroPlanta">
                        <div class="form-group">
                            <label for="apelidoPlanta" class="labelsCadastro">Apelido</label>
                            <input type="text" name="apelidoPlanta" id="apelidoPlanta" class="form-control"
                                placeholder="Gertrudes">
                        </div>
                        <div class="form-group">
                            <label for="sobrePlanta" class="labelsCadastro">Sobre</label>
                            <textarea class="form-control" name="sobrePlanta" id="sobrePlanta"
                                rows="5">Gertrudes foi um presente dos meus pais para minha nova casa! Mas meu gato quer comer ela.....</textarea>
                        </div>
                        <div class="form-group">
                            <label for="especiePlanta" class="labelsCadastro">Espécie</label>
                            <select class="form-control" name="especiePlanta" id="especiePlanta">
                                <option>Orquídea</option>
                                <option>Samambaia</option>
                                <option>Rosa</option>
                            </select>
                        </div>
                        <div class="btnCadastroPlaceholder">
                            <button type="submit" class="btn btnCadastro">Cadastrar Planta</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </article>
</section>
@extends ('footer')