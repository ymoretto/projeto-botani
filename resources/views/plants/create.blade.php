@include ('menu-usuario')
<section>
    <article class="tituloCadastroBanner bannerCadastroPlanta">
        <h2 class="tituloCadastro">Nova planta</h2>
    </article>
    <article class="cadastroPlaceholder">
        <form enctype="multipart/form-data" method="POST" class="formulario" action="/plants">
            @csrf

            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Foto da planta</label>
                        </div>
                    </div>
                    <div class="imagemCadastroPlaceholder">
                        <img class="novaFotoCadastro" src="images/jiboia.jpeg" alt="Foto da nova planta">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dadosCadastroPlanta">
                        <div class="form-group">
                            <label for="name" class="labelsCadastro">Apelido</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Gertrudes">
                        </div>
                        <div class="form-group">
                            <label for="description" class="labelsCadastro">Sobre</label>
                            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="species" class="labelsCadastro">Espécie</label>
                            <input type="text" name="species" id="species" class="form-control"
                                placeholder="Orquídea">
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
@include ('footer')