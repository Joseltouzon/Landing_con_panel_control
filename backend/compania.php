<?php  

  include_once('inc/class.crud.compania.php');

  $compania = new COMPANIA(); 

  // create slide
  if($_POST['action']=='add'){

      $compania->create($link, $_POST['titulo'], $_POST['email'], $_POST['whatsapp'], $_POST['telefono'], $_POST['direccion'], $_POST['ciudad'], $_FILES['img']['name'], $_FILES['img2']['name'], $_FILES['img3']['name'], $_POST['facebook'], $_POST['instagram'], $_POST['youtube']);
    }

  // editar slide
  if($_POST['action']=='update'){
    $companiaDetails = $compania->update($link, $_POST['titulo'], $_POST['email'], $_POST['whatsapp'], $_POST['telefono'], $_POST['direccion'], $_POST['ciudad'], $_FILES['img']['name'], $_FILES['img2']['name'], $_FILES['img3']['name'], $_POST['id'], $_POST['facebook'], $_POST['instagram'], $_POST['youtube']);
  }

  // traer datos de slide existente

  $companiaDetails = $compania->find($link, 1);

  $img = "images/compania/".$companiaDetails['id']."/".$companiaDetails['logo'];
  $img2 = "images/compania/".$companiaDetails['id']."/".$companiaDetails['favicon'];
  $img3 = "images/compania/".$companiaDetails['id']."/".$companiaDetails['logo2'];
  
  // eliminar slide
  if($_POST['action']=='delete'){
    $compania->delete($link, $_POST['id']);
  }

?>
<div class="row">
  <div class="col-lg-12">
    <div class="well">
      
      <h4>Mi Cuenta</h4>
      
        
      
      <form method="post" enctype="multipart/form-data">
        <?=$estado?>
        <br>
        <div class="row">
          <h4 style="text-align: center;margin-bottom: 15px;"><b>Datos Personales</b></h4>
          <div class="col-md-4">
            <input class="form-control" name="titulo" placeholder="Nombre" value="<?=$companiaDetails['nombreEmpresa']?>"/><br>
          </div>
          <div class="col-md-4">
            <input class="form-control" name="email" placeholder="Email de contacto" value="<?=$companiaDetails['emailContacto']?>"/><br>
          </div> 
          <div class="col-md-4">
            <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp" value="<?=$companiaDetails['whatsapp']?>"/><br>
          </div>
          <div class="col-md-4">  
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?=$companiaDetails['telefono']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?=$companiaDetails['direccion']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?=$companiaDetails['ciudad']?>"/><br>
          </div>
          <!--
          <h4 style="text-align: center;margin-bottom: 15px;"><b>Configuración del Sitio y Datos de Pago</b></h4>
          <div class="col-md-4">
            <input type="text" name="tipografia" class="form-control" placeholder="Tipografía ej: tipo de sans-serif" value="<?=$companiaDetails['tipografia']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="color" class="form-control" placeholder="Color ej: #FFFFFF" value="<?=$companiaDetails['color']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="emailSmtp" class="form-control" placeholder="Email Smtp" value="<?=$companiaDetails['emailSmtp']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="host" class="form-control" placeholder="Host" value="<?=$companiaDetails['host']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="emailClave" class="form-control" placeholder="Email Clave" value="<?=$companiaDetails['emailClave']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="key" class="form-control" placeholder="Key" value="<?=$companiaDetails['mpkey']?>"/><br>
          </div>
          <div class="col-md-4">
            <input type="text" name="token" class="form-control" placeholder="Token" value="<?=$companiaDetails['token']?>"/><br>
          </div>
        -->
      </div>
         <div class="row">
          <div class="col-md-4 col-xs-12">
            <b>Logo Encabezado</b>
            <img src="<?=$img?>" width="200">
            <input type="file" class="form-control" name="img"  /><br>
          </div>
          <div class="col-md-4 col-xs-12">
            <b>Logo Footer</b>
            <img src="<?=$img3?>" width="200">
            <input type="file" class="form-control" name="img3"  /><br>
          </div>
          <div class="col-md-4 col-xs-12">
            <b>favicon</b>
            <img src="<?=$img2?>" width="50">
            <input type="file" class="form-control" name="img2"  /><br>
          </div>
         </div>
         <div class="row">
          <h4 style="text-align: center;margin-bottom: 15px;"><b>Redes Sociales</b></h4>
          <div class="col-md-4">
            <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?=$companiaDetails['facebook']?>"/><br>
          </div>
          <div class="col-md-4">  
            <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?=$companiaDetails['instagram']?>"/><br>
          </div>
          <div class="col-md-4">  
            <input type="text" name="youtube" class="form-control" placeholder="Youtube" value="<?=$companiaDetails['youtube']?>"/><br>  
          </div>
        </div>
        
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?=$companiaDetails['id']?>">
        <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
        
      </form>
    </div>
  </div>
</div>


