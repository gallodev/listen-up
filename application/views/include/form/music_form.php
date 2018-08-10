<form id="music-form"  enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/upload'); ?>">
<div class="form-group row">
    <label for="inputNome" class="col-sm-2 col-form-label">Nome da música</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Digite o nome da música">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputArtista" class="col-sm-2 col-form-label">Nome do artista</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputArtista" name="inputArtista" placeholder="Digite o nome do artista">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputTags" class="col-sm-2 col-form-label">Tag's</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputTags" name="inputTags" placeholder="Digite as #tags">
    </div>
  </div>
  <?php 
  
  ?>
  <div class="form-group row">
    <label for="inputGenero" class="col-sm-2 col-form-label">Gênero</label>
    <div class="col-sm-5">
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="inputGenero">
        <option selected>Escolha o gênero</option>
        <?php foreach($generos as $key): ?>
          <option value="<?=$key->ID?>"><?=$key->DESC_GENERO?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group mt-5">
    <h4 class="mb-4">Fazer upload para a ListenUP</h4>  
    <label class="custom-file-upload">
        <input type="file" name="file-upload"/>
        Selecione um arquivo para enviar        
    </label>    
  </div>
  <div class="form-group row mt-5">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">OK</button>
    </div>
  </div>
</form>