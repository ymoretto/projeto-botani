@include ('menu')


<h2 class="tituloPagina">Adicione uma Nova Foto</h2>

    
<section class="novo-post">

    <form class="form-post" action="/newpost" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="form-group">
            <label for="plant_id">Qual é sua planta?</label>
            <select class="form-control" name="plant_id">
                <option value="" disabled selected>Selecione sua planta</option>              
                
            <?php
            use App\Plant;
            use App\User;

            $user = Auth::user();
            $plants = Plant::where('user_id', Auth::user()->id)->get();

            ?>

                @foreach($plants as $p)
                <option value="{{ $p->id }}"  id="plant_id"> {{ $p->name }} </option>
                @endforeach
                
            </select>

 
        <small class="form-text text-muted">Quer adicionar uma nova planta?  <a href='plants/create'>Clique Aqui!</a> </small>
        </div>
        
        <div class="form-group">
            <label for="description">Deixe seu comentário sobre a planta</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Selecione uma foto</label>
            <input type="file" class="form-control-file" id="image" name="image">


        </div>
        <button type="submit" class="btn btn-success">Enviar foto</button>
    </form>

</section>


@include ('footer')