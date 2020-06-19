@include ('menu')

<form enctype="multipart/form-data" method="POST" action="/editimage/{{ auth()->user()->id }}" class="formulario">
@csrf 


    <div class="form-group col-lg-8">
        <label for="image">Escolha uma imagem de perfil</label>
        <input type="file" class="form-control-file" id="image" name="image">

        @if ($errors->has('image'))
            <strong>{{ $errors->first('image') }}</strong>
        @endif
    </div>

    <div class="btnCadastroPlaceholder">
        <button type="submit" class="btn btnCadastro">Salvar Perfil</button>
    </div>
</form>