@include ('menu')

<form enctype="multipart/form-data" method="POST" action="/editprofile">
@csrf 
    <div class="form-group">
        <label for="image">Escolha uma imagem de perfil</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="btnCadastroPlaceholder">
        <button type="submit" class="btn btnCadastro">Enviar Imagem</button>
    </div>
</form>

@include ('footer')