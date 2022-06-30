<?php

  include_once('inc/class.crud.comentario.php');

  $comentario = new COMENTARIO();
  
  // delete 
  if($_POST['action']=='delete'){

    $comentario->delete($link, $_POST['id']);

  }
  
?>

<div class="row">
  <div class="col-lg-12">
    <h4>Comentarios de los artículos del blog</h4>
    <table class="table">
      <tr>
        <td><b>Usuario</b></td>
        <td><b>Artículo</b></td>
        <td><b>Fecha</b></td>
        <td><b>Comentario</b></td>
        <td><b>Eliminar</b></td>
      </tr>
    
      <?
      $sq = $comentario->read($link);
      while($resultado = mysqli_fetch_array( $sq)){

      ?>
      
        <tr>
          <td><?=$resultado['nombre']?></td>
          <td><?=$resultado['titulo']?></td>
          <td><?=$resultado['fecha']?></td>
          <td><?=$resultado['comentario']?></td>
          <td>
            <form method="post">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="id" value="<?=$resultado['id']?>">
              <button class="btn btn-danger btn-sm" type="submit" style="margin-right:5px;"><span class="glyphicon glyphicon-remove"></span></button>
            </form>
          </td>
        </tr>
      
      <?}?>
    </table>
  </div>
</div>  
