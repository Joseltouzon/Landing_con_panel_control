<?php

include_once('inc/dbconfig.php');
include_once('inc/class.crud.compania.php');
$compania = new COMPANIA();
$companiaDetails = $compania->find($link, 1);
$img = "images/compania/" . $companiaDetails['id'] . "/" . $companiaDetails['logo'];
$img2 = "images/compania/" . $companiaDetails['id'] . "/" . $companiaDetails['favicon'];

if ($_POST['login'] != "") {
  if ($_POST['usuario'] == "admin" && $_POST['password'] == 'Lechuzablanca') {
    $_SESSION['admin'] = 'admin';
  } else {
    $mensaje = '<div class="alert alert-danger">Email y/o contrase&ntilde;a incorrectos</div>';
  }
}
if ($_GET['close'] == "logout") {
  session_destroy();
  // redirecciona despues de cerrar sesión
  header("Location: backend.php");
}


?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Log in Meme y Muma</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image" sizes="16x16" href="<?= $img2 ?>">
  <!-- Custom Stylesheet -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/modernizr-3.6.0.min.js"></script>
  <script type="text/javascript" src='js/picnet.table.filter.min.js'></script>
</head>
<? if ($_SESSION['admin'] == '') { ?>

  <body class="h-100">
    <div id="preloader">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
      </div>
    </div>
    <div class="bg-success h-100">
      <div class="container h-100">
        <div class="row justify-content-center h-100">
          <div class="col-xl-6">
            <div class="form-input-content">
              <div class="card">
                <div class="card-body">
                  <div class="logo text-center">

                    <img src="<?= $img ?>" alt="" style="max-height: 90px;">

                  </div>
                  <h4 class="text-center m-t-15">Ingresar al Panel de Control</h4>
                  <form class="m-t-30 m-b-30" method="post">
                    <?php echo $mensaje ?>
                    <div class="form-group">
                      <label>Usuario</label>
                      <input type="text" class="form-control" placeholder="E-mail Usuario" name="usuario">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="text-center m-b-15 m-t-15">
                      <input type="hidden" name="login" value="1">
                      <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                  </form>
                  <div class="text-center">
                    <p>Desarrollado por <a href="http://www.sisifostudio.com" target="_blank">sisifostudio.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="assets/js/custom.min.js"></script>
  </body>

<? } else { ?>

  <body class="v-light vertical-nav fix-header fix-sidebar">
    <div style="background:#F1F4F5 !important;">
      <?php
      include_once('backend/includes/header.php'); ?>
      <br>

      <?php
      if (!empty($_GET['a'])) {
        include_once('backend/' . $_GET['a'] . '.php');
      } else {
        include_once('backend/post.php');
      }
      ?>

      <!-- Common JS -->
      <script src="assets/plugins/common/common.min.js"></script>
      <!-- Custom script -->
      <script src="assets/js/custom.min.js"></script>
      <script type="text/javascript">
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
      </script>
  </body>
<? } ?>

</html>

<?php mysqli_close($link); ?>