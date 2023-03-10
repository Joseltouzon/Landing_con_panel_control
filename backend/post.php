<?php
  // carga archivos
  

  include_once('inc/class.crud.post.php');


  

  $post = new POST();
  


  // new
  if($_POST['action']=='add'){

    $titulo = $_POST['titulo'];
    $video = $_POST['video'];
    $cancion = $_POST['cancion'];
    $posicion = $_POST['posicion'];
    $descripcion = $_POST['descripcion'];
    
    $post->create($link, $titulo, $video, $cancion, $posicion, $descripcion, $_FILES['img']['name']);
  }


  


  // delete 
  if($_POST['action']=='delete'){

    $post->delete($link, $_POST['id']);

  }

  // update      
  
  if($_POST['action']=='update'){
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $video = $_POST['video'];
    $cancion = $_POST['cancion'];
    $posicion = $_POST['posicion'];
    $descripcion = $_POST['descripcion'];

    $postDetails = $post->find($link,$idPost);
    
    $post->update($link, $titulo, $video, $cancion, $posicion, $descripcion, $_FILES['img']['name'], $id);

    // busco si el producto ya tenía descuento anteriormente, caso contrario actualizo el precio con descuento a todas las medidas 
    
  }


  // traer datos de product existente
  if($_POST['action']=='find' || $_POST['action']=='update'){

    $postDetails = $post->find($link, $_POST['id']);
    
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
              <h4 class="card-title">Modificar Video</h4>
            <? } else { ?>
              <h4 class="card-title">Crear Video</h4>
            <? } ?>
            <div class="basic-form">
      <form method="post" enctype="multipart/form-data">

        <?=$estado?>
        <div class="row">
          
          <div class="col-xs-9 col-lg-6">
            <input class="form-control" name="titulo" placeholder="Título" value="<?=$postDetails['titulo']?>"/><br>
          </div>
          <div class="col-xs-3 col-lg-4">  
            <input class="form-control" name="posicion" placeholder="Posición" value="<?=$postDetails['posicion']?>"/><br>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-lg-6">   
            Video <input type="text" class="form-control" name="video" placeholder="Link del Video" value="<?=$postDetails['video']?>"/><br>
          </div>
          <div class="col-xs-6 col-lg-6"> 
           Canción <input class="form-control" name="cancion" placeholder="Link de la Canción" value="<?=$postDetails['cancion']?>"/><br>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-lg-6">
            Imagen <input type="file" class="form-control" name="img" placeholder="Imagen" value="<?=$postDetails['img']?>"/><br>
          </div>
        </div>
        <textarea class="form-control textarea_editor" name="descripcion" id="editor" rows="3" placeholder="Descripción del Video" id="editor"><?=$postDetails['descripcion']?></textarea><br>
        <br>
        <?if($_POST['action']=='find' || $_POST['action']=='update'){?>
          <input type="hidden" name="action" value="update">
          <input type="hidden" name="id" value="<?=$postDetails['id']?>">
          <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
          <a class="btn btn-primary btn-block" href="?a=post">Nuevo</a>

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
            <h4 class="card-title">Videos</h4>
            <div class="table-responsive">
              <table class="table">
                <thead style="background-color: #6ed3cf;color: #fff;">
      <tr>
        <td><b>Img</b></td>
        <td><b>Titulo</b></td>
        <td><b>Posicion</b></td>
        <td><b>Video</b></td>
        <td><b>Cancion</b></td>
        <td><b>Acciones</b></td>
      </tr>
                </thead>
                <tbody>
      <?
      $sq = $post->read($link);
      while($resultado = mysqli_fetch_array( $sq)){

        $img = "images/post/".$resultado['id']."/".$resultado['img'];
      ?>
      
        <tr>
          <td><img src="<?=$img?>" width="100"></td>
          <td><?=$resultado['titulo']?></td>
          <td><?=$resultado['posicion']?></td>
          <td><?=$resultado['video']?></td>
          <td><?=$resultado['cancion']?></td>
                   
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