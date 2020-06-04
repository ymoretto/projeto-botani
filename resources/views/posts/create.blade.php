@include ('menu-usuario')


<h2 class="tituloPagina">Adicione uma Nova Foto</h2>

    
<section class="novo-post">

    <form class="form-post" action="/posts" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="form-group">
            <label for="plant_id">Qual é sua planta?</label>
            <select class="form-control" id="plant_id" name="plant_id">              
              
            @foreach ($id as $plant)
            <option value='{{ $data->id }}'>{{ $data->name }} </option>
            @endforeach         

            </select>
        <small class="form-text text-muted">Quer adicionar uma nova planta?  <a href='plants/create'>Clique Aqui!</a> </small>
        </div>
        <div class="form-group">
            <label for="description">Deixe seu comentário sobre a planta</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Selecione uma foto</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-success">Enviar foto</button>
    </form>

</section>


@include ('footer')