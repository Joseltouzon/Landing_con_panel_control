<?php
// carga archivos


include_once('inc/class.crud.blog.php');




$blog = new BLOG();



// new
if ($_POST['action'] == 'add') {

  $titulo = $_POST['titulo'];
  $fecha = $_POST['fecha'];
  $cancion = $_POST['cancion'];
  $posicion = $_POST['posicion'];
  $intro = $_POST['intro'];
  $descripcion = $_POST['descripcion'];

  $blog->create($link, $titulo, $fecha, $cancion, $posicion, $intro, $descripcion, $_FILES['img']['name']);
}





// delete 
if ($_POST['action'] == 'delete') {

  $blog->delete($link, $_POST['id']);
}

// update      

if ($_POST['action'] == 'update') {

  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $fecha = $_POST['fecha'];
  $cancion = $_POST['cancion'];
  $posicion = $_POST['posicion'];
  $intro = $_POST['intro'];
  $descripcion = $_POST['descripcion'];

  $blogDetails = $blog->find($link, $idBlog);

  $blog->update($link, $titulo, $fecha, $cancion, $posicion, $intro, $descripcion, $_FILES['img']['name'], $id);

  // busco si el producto ya tenía descuento anteriormente, caso contrario actualizo el precio con descuento a todas las medidas 

}


// traer datos de product existente
if ($_POST['action'] == 'find' || $_POST['action'] == 'update') {

  $blogDetails = $blog->find($link, $_POST['id']);
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
              <h4 class="card-title">Modificar Artículo</h4>
            <? } else { ?>
              <h4 class="card-title">Crear Artículo</h4>
            <? } ?>
            <div class="basic-form">
              <form method="post" enctype="multipart/form-data">

                <?= $estado ?>
                <div class="row">

                  <div class="col-xs-9 col-lg-6">
                    <input class="form-control" name="titulo" placeholder="Título" value="<?= $blogDetails['titulo'] ?>" /><br>
                  </div>
                  <div class="col-xs-3 col-lg-4">
                    <input class="form-control" name="posicion" placeholder="Posición" value="<?= $blogDetails['posicion'] ?>" /><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-lg-6">
                    Imagen del Artículo <input type="file" class="form-control" name="img" placeholder="Imagen" value="<?= $blogDetails['img'] ?>" /><br>
                  </div>
                  <div class="col-xs-12 col-lg-6">
                    Fecha de la Publicación<input class="form-control" name="fecha" placeholder="Fecha" value="<?= $blogDetails['fecha'] ?>" /><br>
                  </div>
                </div>
                Intro
                <textarea class="form-control textarea_editor" name="intro" id="editor2" rows="3" placeholder="Intro del Artículo"><?= $blogDetails['intro'] ?></textarea><br>
                Descripción
                <textarea class="form-control textarea_editor" name="descripcion" id="editor" rows="3" placeholder="Descripción del Artículo"><?= $blogDetails['descripcion'] ?></textarea><br>
                <br>
                <? if ($_POST['action'] == 'find' || $_POST['action'] == 'update') { ?>
                  <input type="hidden" name="action" value="update">
                  <input type="hidden" name="id" value="<?= $blogDetails['id'] ?>">
                  <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
                  <a class="btn btn-primary btn-block" href="?a=blog">Nuevo</a>

                <? } else { ?>
                  <input type="hidden" name="action" value="add">
                  <button class="btn btn-success btn-block" type="submit">Cargar</button>
                <? } ?>
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
            <h4 class="card-title">Artículos</h4>
            <div class="table-responsive">
              <table class="table">
                <thead style="background-color: #6ed3cf;color: #fff;">
                  <tr>
                    <td><b>Img</b></td>
                    <td><b>Titulo</b></td>
                    <td><b>Fecha</b></td>
                    <td><b>Posicion</b></td>
                    <td><b>Acciones</b></td>
                  </tr>
                </thead>
                <tpody>
                  <?
                  $sq = $blog->read($link);
                  while ($resultado = mysqli_fetch_array($sq)) {

                    $img = "images/blog/" . $resultado['id'] . "/" . $resultado['img'];
                  ?>

                    <tr>
                      <td><img src="<?= $img ?>" width="100"></td>
                      <td><?= $resultado['titulo'] ?></td>
                      <td><?= $resultado['fecha'] ?></td>
                      <td><?= $resultado['posicion'] ?></td>


                      <td>
                        <form method="post" class='pull-left'>
                          <input type="hidden" name="action" value="find">
                          <input type="hidden" name="id" value="<?= $resultado['id'] ?>">
                          <button class="btn btn-warning btn-sm" type="submit" style="margin-right:5px;">
                            <span class="fa fa-pencil"></span>
                          </button>
                        </form>
                        <form method="post" class='pull-left'>
                          <input type="hidden" name="action" value="delete">
                          <input type="hidden" name="id" value="<?= $resultado['id'] ?>">
                          <button class="btn btn-danger btn-sm" type="submit" style="margin-right:5px;"><span class="fa fa-remove"></span></button>
                        </form>
                      </td>
                    </tr>

                  <? } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>