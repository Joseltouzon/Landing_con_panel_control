<?php

include_once('inc/class.crud.comentario.php');

$comentario = new COMENTARIO();

// delete 
if ($_POST['action'] == 'delete') {

  $comentario->delete($link, $_POST['id']);
}

?>
<div class="content-body">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Comentarios del Blog</h4>
            <div class="table-responsive">
              <table class="table">
                <thead style="background-color: #6ed3cf;color: #fff;">
                  <tr>
                    <td><b>Usuario</b></td>
                    <td><b>Artículo</b></td>
                    <td><b>Fecha</b></td>
                    <td><b>Comentario</b></td>
                    <td><b>Eliminar</b></td>
                  </tr>
                </thead>
                <tbody>
                  <?
                  $sq = $comentario->read($link);
                  while ($resultado = mysqli_fetch_array($sq)) {

                  ?>

                    <tr>
                      <td><?= $resultado['nombre'] ?></td>
                      <td><?= $resultado['titulo'] ?></td>
                      <td><?= $resultado['fecha'] ?></td>
                      <td><?= $resultado['comentario'] ?></td>
                      <td>
                        <form method="post">
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