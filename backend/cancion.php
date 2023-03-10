<?php
  // carga archivos
  

  include_once('inc/class.crud.cancion.php');


  

  $cancion = new CANCION();
  


  // new
  if($_POST['action']=='add'){

    $titulo = $_POST['titulo'];
    $video = $_POST['video'];
    
    $posicion = $_POST['posicion'];
    $descripcion = $_POST['descripcion'];
    
    $cancion->create($link, $titulo, $video, $posicion, $descripcion, $_FILES['img']['name']);
  }


  


  // delete 
  if($_POST['action']=='delete'){

    $cancion->delete($link, $_POST['id']);

  }

  // update      
  
  if($_POST['action']=='update'){
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $video = $_POST['video'];
    
    $posicion = $_POST['posicion'];
    $descripcion = $_POST['descripcion'];

    $cancionDetails = $cancion->find($link,$idCancion);
    
    $cancion->update($link, $titulo, $video, $posicion, $descripcion, $_FILES['img']['name'], $id);

    // busco si el producto ya tenía descuento anteriormente, caso contrario actualizo el precio con descuento a todas las medidas 
    
  }


  // traer datos de product existente
  if($_POST['action']=='find' || $_POST['action']=='update'){

    $cancionDetails = $cancion->find($link, $_POST['id']);
    
  }
  

  
  
?>


<!-- FORMS -->
<div class="content-body">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <div class="card-body">
            <? if ($_POST['action'] == 'find' || $_POST['action'] == 'update') { ?>
              <h4 class="card-title">Modificar Canción</h4>
            <? } else { ?>
              <h4 class="card-title">Crear Canción</h4>
            <? } ?>
            <div class="basic-form">
      <form method="post" enctype="multipart/form-data">

        <?=$estado?>
        <div class="row">
          
          <div class="col-xs-9 col-lg-6">
            <input class="form-control" name="titulo" placeholder="Título" value="<?=$cancionDetails['titulo']?>"/><br>
          </div>
          <div class="col-xs-3 col-lg-4">  
            <input class="form-control" name="posicion" placeholder="Posición" value="<?=$cancionDetails['posicion']?>"/><br>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-lg-6">   
            Video <input type="text" class="form-control" name="video" placeholder="Link del video de la canción" value="<?=$cancionDetails['video']?>"/><br>
          </div>
          
        </div>
        <div class="row">
          <div class="col-xs-12 col-lg-6">
            Imagen <input type="file" class="form-control" name="img" placeholder="Imagen" value="<?=$cancionDetails['img']?>"/><br>
          </div>
        </div>
        <textarea class="form-control textarea_editor" name="descripcion" rows="3" placeholder="Descripción de la Canción" id="editor"><?=$postDetails['descripcion']?></textarea><br>
        <br>
        <?if($_POST['action']=='find' || $_POST['action']=='update'){?>
          <input type="hidden" name="action" value="update">
          <input type="hidden" name="id" value="<?=$cancionDetails['id']?>">
          <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
          <a class="btn btn-primary btn-block" href="?a=cancion">Nuevo</a>

        <?}else{?>
          <input type="hidden" name="action" value="add">
          <button class="btn btn-success btn-block" type="submit">Cargar</button>
        <?}?>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>
<div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Canciones</h4>
            <div class="table-responsive">
              <table class="table">
                <thead style="background-color: #6ed3cf;color: #fff;">
      <tr>
        <td><b>Img</b></td>
        <td><b>Titulo</b></td>
        <td><b>Posicion</b></td>
        <td><b>Video</b></td>
        
        <td><b>Acciones</b></td>
      </tr>
                </thead>
                <tbody>
      <?
      $sq = $cancion->read($link);
      while($resultado = mysqli_fetch_array( $sq)){

        $img = "images/cancion/".$resultado['id']."/".$resultado['img'];
      ?>
      
        <tr>
          <td><img src="<?=$img?>" width="100"></td>
          <td><?=$resultado['titulo']?></td>
          <td><?=$resultado['posicion']?></td>
          <td><?=$resultado['video']?></td>
          
                   
          <td>
            <form method="post" class='pull-left'>
              <input type="hidden" name="action"  value="find">
              <input type="hidden" name="id" value="<?=$resultado['id']?>">
              <button class="btn btn-warning btn-sm" type="submit" style="margin-right:5px;">
                <span class="fa fa-pencil"></span>
              </button>
            </form>
            <form method="post" class='pull-left'>
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?=$resultado['id']?>">
              <button class="btn btn-danger btn-sm" type="submit" style="margin-right:5px;"><span class="fa fa-remove"></span></button>
            </form>
          </td>
        </tr>
      
      <?}?>
                </tbody>
    </table>
  </div>
</div>  
        </div>
      </div>
</div>
      </div>
      </div>