@include ('menu')

<section id="info-usuario">
    <div class="container">
        <div class="row mt-3">
            <div class="col mt-5">
                <div class="imgUserPlaceholderPerfil">
                    <img class="img-user" src="{{ asset('images/perfil-botania-planticia.jpg') }}" alt="Foto de Perfil">
                </div>
            </div>

            <div class="col-md-9 basic-info-text">
                <h2 class="nome-usuario titulo">{{ $user->name }}</h2>
                <a name="editarPerfil" id="editarPerfil" class="btnEditarPerfil" href="/profile/{{ $user->id }}/edit" role="button">Editar Perfil</a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Membro desde: {{ date( 'd/m/Y' , strtotime($user->created_at))}}</li>
                    <li class="list-group-item">Plantas: {{ $plants = DB::table('plants')->where('user_id', $user->id)->count()}}</li>
                    <li class="list-group-item">
                        {{ $user->description }}
                        <!-- <br><span class="badge badge-primary badge-pill">editar</span> -->
                    </li>

                </ul>
                <div class="badges-session">
                    <strong>Badges</strong>
                    <div class="container">
                        <span>
                            <img class="accomplishment" src="{{ asset('images/badges/051-ecologism-23.png') }}" alt="primeira planta">
                        </span>
                        <!-- not today courona vairus, not today-->
                        <span>
                            <img class="accomplishment" src="{{ asset('images/badges/051-ecologism-9.png') }}" alt="primeira planta">
                        </span>
                        <span>
                            <img class="accomplishment" src="{{ asset('images/badges/051-ecologism-18.png') }}" alt="primeira planta">
                        </span>
                    </div>
                </div>
            </div> <!-- close row -->
        </div> <!-- close container -->
</section>

<section id="plantas-usuario">
    <div class="container">
        <div class="row">
            <h2 class="titulo h2-perfil">Plantas de {{ $user->name }}</h2>
        </div>
        <div class="row">
            <!-- <div class="plantasEAmigosUsuario">
                <a href="#"><img class="img-pq" src="{{ asset('images/jiboia.jpeg') }}" alt=""></a>
            </div> -->

            @foreach($user->plants as $plant)
                <div class="plantasEAmigosUsuario">
                    <a href="/plantprofile/{{ $plant->id }}"><img class="img-pq w-150" src="/storage/{{ $plant->image }}" alt=""></a>
                </div>
            @endforeach

        </div>
    </div>
</section>
<section id="amigos-usuario">
    <div class="container">
        <div class="row">
            <h2 class="titulo h2-perfil">Amigos de {{ $user->name }}</h2>
        </div>
        <div class="row">
            <div class="plantasEAmigosUsuario">
                <a href="#"><img class="img-pq-amigos" src="{{ asset('images/helo.jpeg') }}" alt="Heloísa Medeiros" style="filter: grayscale(100%)"></a>
            </div>
        </div>
    </div>
</section>


@include ('footer')