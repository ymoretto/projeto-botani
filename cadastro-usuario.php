<?php require_once("header.php") ?>

<section>
    <article class="tituloCadastroBanner bannerCadastroUsuario">
        <h2 class="tituloCadastro">Novo usuário</h2>
    </article>
    <article class="cadastroPlaceholder">
        <form action="" enctype="multipart/form-data" method="post" class="formulario">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imagemUsuario" name="imagemUsuario">
                            <label class="custom-file-label" for="imagemUsuario">Uma foto sua</label>
                        </div>
                    </div>
                    <div class="imagemCadastroPlaceholder">
                        <img class="novaFotoCadastro" src="images/perfil-botania-planticia.jpg" alt="Sua foto de perfil">
                    </div>
                    <div class="form-group">
                        <label for="senhaUsuario" class="labelsCadastro">Senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario">
                    </div>
                    <div class="form-group">
                        <label for="senhaUsuario" class="labelsCadastro">Confirme sua senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dadosCadastroUsuario">
                        <div class="form-group">
                            <label for="nomeUsuario" class="labelsCadastro">Seu nome</label>
                            <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control"
                                placeholder="Botânia Plantícia da Silva">
                        </div>
                        <div class="form-group">
                            <label for="username" class="labelsCadastro">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="bot_planticia">
                        </div>
                        <div class="form-group">
                            <label for="emailUsuario" class="labelsCadastro">E-mail</label>
                            <input type="email" name="emailUsuario" id="emailUsuario" class="form-control"
                                placeholder="botania.planticia@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="sobreUsuario" class="labelsCadastro">Sobre você</label>
                            <textarea class="form-control" name="sobreUsuario" id="sobreUsuario"
                                rows="2">Estudante de Biologia da Unicamp apaixonada por botânica! </textarea>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="dataNasc" class="labelsCadastro">Sua data de nascimento</label>
                                    <input type="date" name="dataNasc" id="dataNasc" class="form-control"
                                        placeholder="18/10/1996">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="especiePlanta" class="labelsCadastro">Gênero</label>
                                    <select class="form-control" name="especiePlanta" id="especiePlanta">
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                        <option>Não-binário</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btnCadastroPlaceholder">
                            <button type="submit" class="btn btnCadastro">Cadastrar-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </article>
</section>

<?php require_once("footer.php") ?>