@extends('layouts.app')
@include ('header')

<section>
    <article class="tituloCadastroBanner bannerCadastroUsuario">
        <h2 class="tituloCadastro">Novo usuário</h2>
    </article>
    <article class="cadastroPlaceholder">
        <form action="{{ route('register') }}" enctype="multipart/form-data" method="POST" class="formulario">
            @csrf

            <div class="form-row">
                <div class="col-lg-4">
                    <!-- <div class="form-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Foto sua</label>
                        </div>
                    </div>

                    <div class="imagemCadastroPlaceholder">
                        <img class="novaFotoCadastro" src="images/perfil-botania-planticia.jpg" alt="Sua foto de perfil">
                    </div> -->

                    <div class="form-group">
                        <label for="name" class="labelsCadastro">Seu Nome</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Botânia Plantícia da Silva">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="username" class="labelsCadastro">Username</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username') }}" required autocomplete="username" autofocus
                            placeholder="bot_planticia">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="labelsCadastro">Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                        name="password" id="password"
                        required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="labelsCadastro">Confirme sua senha</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                        required autocomplete="new-password">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="dadosCadastroUsuario">

                        <div class="form-group">
                            <label for="email" class="labelsCadastro">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required autocomplete="email"
                                placeholder="botania.planticia@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="labelsCadastro">Sobre você</label>
                            <textarea class="form-control" name="description" id="description"
                                value="{{ old('description') }}" rows="4"></textarea>
                        </div>

                        <div class="form-row">
                            <!-- <div class="col">
                                <div class="form-group">
                                    <label for="date_of_birth" class="labelsCadastro">Sua data de nascimento</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                    value="" placeholder="18/10/1996">
                                </div>
                            </div> -->
                            <div class="col">
                                <div class="form-group">
                                    <label for="gender" class="labelsCadastro">Gênero</label>
                                    <select class="form-control" name="gender" id="gender" value="gender">
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                        <option>Não-binário</option>
                                        <option>Prefiro não informar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="btnCadastroPlaceholder">
                            <button type="submit" class="btn btnCadastro">{{ __('Register') }}</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </article>
</section>

@include ('footer')