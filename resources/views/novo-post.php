<?php require_once("menu-usuario.php") ?>


<h2 class="tituloPagina">Adicione uma Nova Foto</h2>

    
<section class="novo-post">

    <form class="form-post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Qual é sua planta?</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Rosinha</option>
              <option>Cacilda</option>
              <option>Pézinho</option>
              <option>Laranjinha</option>
              <option>Tostinho</option>
            </select>
        <small id="emailHelp" class="form-text text-muted">Quer adicionar uma nova planta?  <a href='cadastro-planta.php'>Clique Aqui!</a> </small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deixe seu comentário sobre a planta</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Selecione uma foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-success">Enviar foto</button>
    </form>

</section>


<?php require_once("footer.php") ?>