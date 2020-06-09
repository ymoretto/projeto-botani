@include ('menu')


<h2 class="tituloPagina">Adicione uma Nova Foto</h2>

    
<section class="novo-post">

    <form class="form-post" action="/newpost" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="form-group">
            <label for="plant_id">Qual é sua planta?</label>
            <select class="form-control">              

            <?php
             use App\Plant;
             $plants = Plant::all();
            ?>

            @foreach($plants as $p) 

            <option value="{{ old('$p->plant_id') }}"  id="plant_id" name="plant_id">{{ $p->name }}</option>
        
            @endforeach

            </select>

            @if ($errors->has('plant_id'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('plant_id') }} </strong>
                </span>
            @endif

 
        <small class="form-text text-muted">Quer adicionar uma nova planta?  <a href='plants/create'>Clique Aqui!</a> </small>
        </div>
        
        <div class="form-group">
            <label for="description">Deixe seu comentário sobre a planta</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Selecione uma foto</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('image') }} </strong>
                </span>
            @endif

        </div>
        <button type="submit" class="btn btn-success">Enviar foto</button>
    </form>

</section>


@include ('footer')