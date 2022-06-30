<?php

include_once('inc/dbconfig.php');


error_reporting(E_ALL);

  if($_POST['usuario']=="admin" && $_POST['password']=='Lechuzablanca'){
    $_SESSION['admin']='admin';
  }
  if($_GET['close']=="logout"){
    session_destroy();
    // redirecciona despues de cerrar sesión
    header("Location: backend.php");
  }
  
  
?>

<!DOCTYPE html>
<html>
  <?php //include_once('includes/head.php');?>
<?php /*  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> */ ?>
<head>
  <meta charset="UTF-8">
  <meta charset="ISO-8859-1">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src='js/picnet.table.filter.min.js'></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="ckeditor/ckeditor.js"></script>
</head>
    
    <body>
    


    <?if($_SESSION['admin']==''){?>
      <div class="container">
        <div class="col-lg-4">
          <div class="well">
            <form method="post">
              <h4>Administrador</h4>
              <input type="text" name="usuario" class="form-control" placeholder='Usuario'><br>
              <input type="password" name="password" class="form-control" placeholder='Clave'><br>
              <button class="form-control btn btn-primary" type="submit">Entrar</button>
            </form>    
          </div>
        </div>
      </div>  
      
    <?}else{?>
      <?include_once('backend/includes/admin_header.php');?><br>
      <div style="max-width:1400px;margin:0 auto;">
      <?
        if(!empty($_GET['a'])){  
          include_once('backend/'.$_GET['a'].'.php'); 
        }else{
          include_once('backend/post.php');
        }
      ?>
      </div>  
    <?}?>
            
<?if($_REQUEST['e']!='ok'){?>
    <!-- scripts de modificacion y eliminacion -->
    <script>
      $(document).ready(function(){
        $('#table').tableFilter();
        

        $(".eliminaCat2").click(function(){
          if(confirm("¿Desea eliminar?")){
            var form = $(this).attr("rel");
            $("#form2"+form).submit();
          }
        });
        
        $(".confirmaCat2").click(function(){
          if(confirm("¿Desea modificar?")){
            var form = $(this).attr("rel");
            $("#formConfirma2"+form).submit();
          }
        });

        $(".Eliminar").click(function(){
          if(confirm("¿Desea Eliminar?")){
            var form = $(this).attr("rel");
            $("#formElimina"+form).submit();
          }
        });
        
        $(".editar").click(function(){
          var form = $(this).attr("rel");
          $("#formModifica"+form).submit();
        });
      });
    </script>
<?}?>
<script type="text/javascript" >
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor' );
      CKEDITOR.replace( 'editor2' );
      CKEDITOR.replace( 'editor3' );
  </script>
   
  </body>
</html>

<?php mysqli_close($link);?>