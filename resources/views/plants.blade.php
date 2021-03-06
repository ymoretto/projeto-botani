@include ('menu')

<div class="row justify-content-start">
    <div class="tituloPlaceholder">
        <h2>Minhas Plantas</h2>
    </div>
</div>
<div class="row listaPlantas">

    <!-- CARD NOVA PLANTA -->
    <a href="/newplant">
        <div class="card cardPlanta">
            <img class="card-img-top" src="{{ asset('images/novaplanta.png') }}" alt="Nova planta">
            <div class="card-body">
                <p class="card-text text-center">Nova planta</p>
            </div>
        </div>
    </a>
    <!-- CARD NOVA PLANTA-->

    <!-- CARD PLANTA -->
    <div class="row">

            @foreach($user->plants as $p)
                <a href="/plantprofile/{{ $p->id }}" target="">
                    <div class="card cardPlanta">
                        <img class="card-img-top w-100" src="/storage/{{ $p->image }}" alt="Foto da sua planta">
                        <div class="card-body">
                        <p class="card-text text-center">{{ $p->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

    </div>
    <!-- CARD PLANTA-->


@include ('footer')