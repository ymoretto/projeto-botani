@include ('menu-usuario')


<h2 class="tituloPagina">Adicione uma Nova Foto</h2>

    
<section class="novo-post">

    <form class="form-post" action="/posts" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="form-group">
            <label for="qual-planta">Qual é sua planta?</label>
            <select class="form-control" id="qual-planta" name="qual-idade">
              <option>Rosinha</option>
              <option>Cacilda</option>
              <option>Pézinho</option>
              <option>Laranjinha</option>
              <option>Tostinho</option>
            </select>
        <small id="emailHelp" class="form-text text-muted">Quer adicionar uma nova planta?  <a href='cadastro-planta.php'>Clique Aqui!</a> </small>
        </div>
        <div class="form-group">
            <label for="description">Deixe seu comentário sobre a planta</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="image-post">Selecione uma foto</label>
            <input type="file" class="form-control-file" id="image-post" name="image-post">
        </div>
        <button type="submit" class="btn btn-success">Enviar foto</button>
    </form>

</section>


@include ('footer')