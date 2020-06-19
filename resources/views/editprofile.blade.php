@include ('menu')

<form enctype="multipart/form-data" method="POST" action="/profile/{{ $user->id }}" class="formulario">
@csrf 
@method('PATCH') <!-- avisa o Laravel que é uma edição com método PATCH -->


    <div class="form-group col-lg-8">
        <label for="name" class="labelsCadastro">Seu Nome</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>


    <div class="form-group col-lg-8">
        <label for="description" class="labelsCadastro">Mude sua descrição sobre você</label>
            <input class="form-control" name="description" id="description"
                    value="{{ old('description') ?? $user->description }}" placeholder="{{ $user->description }}" autocomplete="description" autofocus rows="4"></textarea>

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
    </div>

    <div class="btnCadastroPlaceholder">
        <button type="submit" class="btn btnCadastro">Salvar Perfil</button>
    </div>
</form>

@include ('footer')