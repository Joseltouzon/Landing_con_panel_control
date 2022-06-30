<?php
  include_once('inc/class.crud.newsletter.php');

  $newsletter = new NEWSLETTER();
  
?>

<div class="kids_bottom_container footer">
		<div class="l-page-width">
			<div class="wrapper">
				<div class="widget" style="text-align: center;" >
					<a id="kids_logo_text" href="index.php"><img src="images/compania/<?=$companiaDetails['id']?>/<?=$companiaDetails['logo']?>" style="max-height: 250px;" /></a>
				</div>
				<div class="widget">
					<h3 class="widget-title">Links Rápidos</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="ofrecemos.php">Qué ofrecemos</a></li>
						<li><a href="amigurumis.php">Amigurumis</a></li>
						<li><a href="mym.php">Participa de MyM</a></li>
						<li><a href="canciones.php">Canciones</a></li>
						<li><a href="videos.php">Videos</a></li>
						<!--<li><a href="page-404.php">Shop</a></li>-->
						<li><a href="page-contact.php">Contacto</a></li>
					</ul>
				</div>
				<!--
				<div class="widget widget_cws_latest_posts">
					<div class="latest-posts-widget">
						<h3 class="widget-title">Latest Posts</h3>
						<div class="widget-content">
							<ul>
								<li>
									<div class="kids_image_wrapper ">
										<a href="pic/HappyFeet_1st4.jpg" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]">
											<img src="pic/70x70-img-1.jpg" width="70" height="70" alt=""></a>
									</div>
									<div class="kids_post_content">
										<h4><a href="#">Image Post</a></h4>
										<p>Lorem ipsum dolor ...</p>
										<p class="time-post">January 3, 2015</p>
									</div>
								</li>
								<li>
									<div class="kids_image_wrapper ">
										<a href="pic/LegoMovie_3rd4.jpg" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]">
											<img src="pic/70x70-img-2.jpg" width="70" height="70" alt=""></a>
									</div>
									<div class="kids_post_content">
										<h4><a href="#">Image Post</a></h4>
										<p>Lorem ipsum dolor ...</p>
										<p class="time-post">January 2, 2015</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			    -->
				<div class="widget">
					<h3 class="widget-title" style="margin-bottom: 20px;">Conócenos Más</h3>
						<p><a href="<?=$companiaDetails['youtube']?>" target="_blank"><i class="fa fa-youtube-play" style="margin-right: 15px;color: #e62117;"></i>You Tube</a></p>
						<p><a href="<?=$companiaDetails['facebook']?>" target="_blank"><i class="fa fa-facebook" style="margin-right: 15px;color: #3b5998;"></i>Facebook</a></p>
						<p><a href="<?=$companiaDetails['instagram']?>" target="_blank"><i class="fa fa-instagram" style="margin-right: 15px;color: #8134af;"></i>Instagram</a></p>
				</div>
				<div class="widget">
					<h3 class="widget-title" style="margin-bottom: 20px;">Enterate de Todo</h3>
					<p>Suscribite a nuestro Newsletter y enterate de lo último de Meme y Muma</p>
					 <div class="subscribtion_form">
                            <?
                            if(!empty($_POST['procesar'])){
                            $newsletter->create($link, $_POST['email'], $_POST['nombre']);?>
                            <h6 class="text-danger"><u>Gracias por ser parte.</u></h6> 
                            <?}?>
                            <form action="#" method="post">
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                                <br><input type="text" name="nombre" class="form-control" placeholder="Nombre Completo"><br>
                                <input type="hidden" name="procesar" value="1">
                                <button type="submit" class="more-link cws_button">Suscribirse</button>
                            </form>
                        </div>	
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/ l-page-width-->
	</div>
	<!-- .kids_bottom_container -->
	<div class="kids-footer-copyrights footer">
		<div class="l-page-width  clearfix">
			<div class="wrapper">
				
				<div class="widget widget_text">
					<div class="textwidget"><p>Copyright &copy; 2022. Desarrollado por <a href="https://www.sisifostudio.com" target="_blank"><b>sisifostudio.com</b></a>. Todos los derechos reservados</p></div>
				</div>
			</div>
		</div>
		<div class="dark-mask"></div>
	</div>