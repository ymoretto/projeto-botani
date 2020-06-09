@include ('menu')
<section>
    <article class="tituloCadastroBanner bannerCadastroPlanta">
        <h2 class="tituloCadastro">Nova planta</h2>
    </article>
    <article class="cadastroPlaceholder">
        <form enctype="multipart/form-data" method="POST" class="formulario" action="/newplant">
            @csrf

            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="custom-file">
                            <label class="custom-file-label" for="image">Foto da planta</label>
                            <input type="file" class="custom-file-input" id="image" name="image">
                            
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }} </strong>
                                </span>
                            @endif
                            
                        </div>
                    </div>

                    <div class="imagemCadastroPlaceholder">
                        <img class="novaFotoCadastro" src="{{ asset('images/jiboia.jpeg') }}" alt="Foto da nova planta" style="max-width: 500px">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="dadosCadastroPlanta">
                        <div class="form-group">
                            <label for="name" class="labelsCadastro">Apelido</label>
                            <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name') }}" placeholder="Gertrudes">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }} </strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="description" class="labelsCadastro">Sobre</label>
                            <textarea class="form-control" name="description" id="description" rows="5" value="{{ old('description') }}"></textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }} </strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                        <label for="species" class="labelsCadastro">Espécie</label>
                            <input type="text" name="species" id="species" class="form-control"
                            value="{{ old('species') }}" placeholder="Orquídea">

                            @if ($errors->has('species'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('species') }} </strong>
                                </span>
                            @endif

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