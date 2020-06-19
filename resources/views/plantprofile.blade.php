@include ('menu')

<section id="info-planta">
    <div class="container">
        <div class="row">
            <h2 class="mt-4 mb-3 titulo"> {{ $plant->name }} </h2>
        </div>

        <div class="row">
            <div class="col text-center"> <!-- div da imagem de perfil da planta -->
                <img class="img-fluid plant-image" src="/storage/{{ $plant->image }}" alt="Imagem da Cacilda"> <!-- tirei img-fluid -->
                <!-- a imagem está configurada para mudar de tamanho com media query -->
                <!-- seria legal pensar em uma forma de automatizar isso -->
            </div>
            <div class="col plant-description"> <!-- div das informações da planta -->
                <p> {{ $plant->description }}</p>
                <ul>
                  <li>{{ $plant->species }}</li>
                  <li> {{ date( 'd/m/Y' , strtotime($plant->created_at))}}</li>
                  <li>Planta de {{ $plant->user->name }}</li>
                  <li>Algo do tipo</li>
                </ul>
                <a name="editarPlanta" id="editarPlanta" class="btnEditarPlanta" href="#" role="button">Editar Planta</a>
                <a name="excluirPlanta" id="excluirPlanta" class="btnExcluirPlanta" href="#" role="button">Excluir Planta</a>
            </div> <!-- close plant col -->

        </div> <!-- close row -->

    </div> <!-- close container -->

    <div class="space"></div> <!--Serve apenas para criar um espaço entre os blocos-->

    <div class="container">
        <div class="row">
            <h2 class="titulo">Linha do Tempo</h2>
        </div>
        <div class="row">
            <div class="timelinePlanta">
                <a href="#"><img class="img-pq" src="images/jiboia.jpeg" alt=""></a>
                
                @foreach($plant->posts as $p)
                        <a href='#'><img class='img-pq' src="{{ $p->image }}"></a>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include ('footer')