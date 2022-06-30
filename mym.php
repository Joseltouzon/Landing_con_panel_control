<?php

    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    

    $compania = new COMPANIA();
    
    $page = "mym";

    $companiaDetails = $compania->find($link,1);


    $r = rand(1,3);
	  switch($r){
	      case 1:
	          $captcha= " 1 + 3 ";
	          break;
	      case 2:
	          $captcha= " 3 + 4 ";
	          break;
	      case 3:
	          $captcha= " 5 + 3 ";
	          break;
	  }

	  switch($_POST['captcha']){
	      case 1:
	          if($_POST['validacion']==4){$valida="ok";}
	          break;
	      case 2:
	          if($_POST['validacion']==7){$valida="ok";}
	          break;
	      case 3:
	          if($_POST['validacion']==8){$valida="ok";}
	          break;
	  }
   
    if($_POST['procesaForm']!="" && $valida!="ok" ){
      $mensajes = "<h3><u>Ocurrió un error inesperado. Por favor vuelva a intentarlo</u></h3>";
    }

    if($_POST['procesaForm']!="" && $valida=="ok" ){
    /**
     * @version 1.0
     */

    require("contact-form-1.2/class.phpmailer.php");
    require("contact-form-1.2/class.smtp.php");

    // Valores enviados desde el formulario
    
    $nombre = $_POST['name'];
    $email = $_POST['mail'];
    $msg = $_POST['msg'];
    $name2 = $_POST['name2'];
    $edad = $_POST['edad'];
    
    // Datos de la cuenta de correo utilizada para enviar vía SMTP
    $smtpHost = "c2181090.ferozo.com";  // Dominio alternativo brindado en el email de alta 
    $smtpUsuario = "no-reply@c2181090.ferozo.com";  // Mi cuenta de correo
    $smtpClave = "CjY7@D2v91";  // Mi contraseña

    // Email donde se enviaran los datos cargados en el formulario de contacto
    $emailDestino = "info@memeymuma.com";
    

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 465; 
    $mail->SMTPSecure = 'ssl';
    $mail->IsHTML(true); 
    $mail->CharSet = "utf-8";


    // VALORES A MODIFICAR //
    $mail->Host = $smtpHost; 
    $mail->Username = $smtpUsuario; 
    $mail->Password = $smtpClave;

    $mail->From = $email; // Email desde donde envío el correo.
    $mail->FromName = $nombre;
    $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

    $mail->Subject = "Contacto desde memeymuma.com, Participa de Meme y Muma"; // Este es el titulo del email.

    $mensaje = "<h3>Contacto desde memeymuma.com, Participa de Meme y Muma </h3><br />
    <p>
    Nombre de la Mamá / Papá : '$nombre'<br />
    Nombre del Peque : '$name2'<br />
    Edad del Peque : '$edad'<br />
    Mail : '$email'<br />
    Mensaje : '$msg'<br /></p> ";

    $mensajeHtml = nl2br($mensaje);
    $mail->Body = "{$mensajeHtml} <br /><br />Contacto desde memeymuma.com, Participa de Meme y Muma<br />"; // Texto del email en formato HTML
    $mail->AltBody = "{$mensaje} \n\n Contacto desde memeymuma.com, Participa de Meme y Muma"; // Texto sin formato HTML
    // FIN - VALORES A MODIFICAR //
    
    $estadoEnvio = $mail->Send(); 
    if($estadoEnvio){
         $mensajes = "<h3><u>Mensaje enviado con exito. Muchas gracias por ser parte de Meme y Muma</u></h3>";
    } 
}
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie">

<?php include_once 'includes/head.php';?>

<body data-type-of-widget="2" class="page secondary-page t-pattern-9">
	<!-- HEADER BEGIN -->
	<?php include_once 'includes/header.php';?>
		<!--/ #kids_header-->
		<!-- HEADER END -->
	</div>
	<!-- .bg-level-1 -->
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>Participa Meme y Muma</h1>
						<ul id="breadcrumbs">
							<li><a href="index.html" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Participa de Meme y Muma</span></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .kids_top_content_middle -->
		</div>
		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container no-padding">
				<section class="kids_bottom_content_container">
					<!-- ***************** - START Image floating - *************** -->
					<div class="page-content">
						<div class="bg-level-2 first-part"></div>
						<div class="container l-page-width">
							<div class="entry-container ">
								<main>
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-9'>
											<section class='cws-widget'>
												<div><h1 class='widget-title'>Participa de Meme y Muma</h1></div>
												<section class='cws_widget_content'>
													<p>Te invitamos a formar parte de nuestra comunidad: <b>"Los MemüS"</b>. Junto a Meme y Muma podremos aprender y descubrir muchas cosas nuevas.</p>
													<p>Cuéntanos qué te gustaría ver en nuestros episodios.</p>    
														<div role="form" class="wpcf7">
															<div class="screen-reader-response"></div>
															<h3><?=$mensajes?></h3>
															<form method="post" class="wpcf7-form contact-form">
																<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="49" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Nombre Completo Mamá / Papá" required /></span>
																<span class="wpcf7-form-control-wrap your-name"><input type="text" name="mail" value="" size="49" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Correo Electrónico" required /></span>
																<span class="wpcf7-form-control-wrap your-name"><input type="text" name="name2" value="" size="49" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Nombre del Peque" required /></span> 
																<span class="wpcf7-form-control-wrap your-email"><input type="text" name="edad" value="" size="49" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Edad del Peque" required /></span>
																<span class="wpcf7-form-control-wrap your-message"><textarea name="msg" cols="103" rows="8" class="wpcf7-form-control wpcf7-textarea" placeholder="Contanos qué te gustaría ver en los episodios de MyM"></textarea></span>
																<label>Código Captcha : <?=$captcha?> </label>
																<input type="hidden" name="captcha" value="<?=$r?>">
												                <span class="wpcf7-form-control-wrap"><input type="text" placeholder="* Total de la suma" class="wpcf7-form-control" name="validacion" required></span>
												                  <br>
																<input type="hidden" name="procesaForm" value="1">
																<input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" />
																</p>
															</form>
															
														</div>
												</section>
											</section>
										</div>
										<div class='grid-col grid-col-3'>
											<section class='cws-widget'>
												
												<p><img class="alignleft border size-medium" src="images/mym-1.png" /></p>
												<p><img class="alignleft border size-medium" src="images/mym-2.png" /></p>
											</section>
										</div>
									</div>
									<!-- comments block -->
									<!-- //end comments block -->
								</main>
								<div class="kids_clear"></div>
							</div>
							<!-- .entry-container -->
						</div>
						<div class="bg-level-2 second-part"></div>
					</div>
					<!-- ***************** - END Image floating - *************** -->
				</section>
				<!-- .bottom_content_container -->
			</div>
			<div class="content_bottom_bg"></div>
		</div>
	</div>
	<!-- .end_content -->
	<!-- FOOTER BEGIN -->
	<?php include_once 'includes/footer.php';?>
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing-1.3.min.js'></script>
	
	<script type='text/javascript' src="js/jquery.form.min.js"></script>
	<script type="text/javascript" src='js/jquery-ui.min.js'></script>	
	<script type='text/javascript' src='js/scripts.js'></script>
	<script type='text/javascript' src='js/retina.min.js'></script>
	<script type='text/javascript' src='js/jquery.tweet.js'></script>
	<script src='js/jquery.lavalamp-1.4.min.js'></script>
	
	<script type='text/javascript' src='js/owl.carousel.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	
	<script type='text/javascript' src='js/jquery.flexnav.min.js'></script>
</body>
</html>