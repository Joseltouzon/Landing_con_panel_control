<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    include_once('inc/class.crud.post.php');
    include_once('inc/class.crud.cancion.php');
    

    $compania = new COMPANIA();
    $post = new POST();
    $cancion = new CANCION();

    $companiaDetails = $compania->find($link,1);
    $cancionDetails = $cancion->find($link, $_GET['id']);
    $video = $cancionDetails['video'];
    
    $page = "canciones";
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie">

<?php include_once 'includes/head.php';?>
<style>
    .mr50{
    	margin-right: 50px;
    }
	.uno{
       text-align: center;
       margin-bottom: 20px;
       margin-left: 50px;
       margin-top: 90px;
	}
	@media screen and (max-width: 500px){
	.uno{
       margin-bottom: 1px;
       margin-left: 1px;
       margin-top: 1px;
	}
	.mr50{
		margin-right: 1px;
	}
}
</style>

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
						<h1>Canciones</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Canciones</span></li>
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
							<div class="entry-container single-sidebar">
								<div style="margin-bottom: 30px;"><h1 class='widget-title' style="color:#3185cb;font-size: 32px;">Canciones</h1></div>
								<h2 class='widget-title'>Canciones para niños</h2>
								<p style="margin-bottom: 30px;">Ya es sabido que la música, es otro lenguaje, y como tal activa el sistema sensorial. Esto hace que, si forma parte de la vida cotidiana del niño, favorezca su desarrollo cognitivo, sensorial, comunicativo, posibilitando la ampliación del vocabulario, adquisición de habilidades sociales, motrices y afectivas.</p>
								<p> Potencia, a su vez, la atención, la expresión, la discriminación auditiva, la motricidad, la creatividad, la imaginación, el pensamiento abstracto y despierta emociones conectándolos  con su ser interior. En todos los años de trayectoria en educación infantil, la música ha sido el latido diario de nuestro proyecto, por el que tantos peques han transitado y disfrutado, logrando descubrir en ella, un aliado incondicional para toda la vida.</p> 
								<p>Meme y Muma traen infinidad de canciones, pensadas especialmente para disfrutar, aprender y acompañar el crecimiento de los peques, en sus primeros años de vida.</p>
								<h4>Puedes encontrarlas en las principales plataformas de música:</h4>
								<ul>
									<li>
										<a href="https://spoti.fi/3tMQJRb" target="_blank"><img src="images/spotify.png" style="max-height: 25px;margin-left: 20px;"></a>
                                    </li>
                                    <li style="margin-top: 5px;">
										<a href="https://apple.co/3JGwnhT" target="_blank"><img src="images/amusic.png" style="max-height: 25px;margin-left: 20px;"></a>
                                    </li>
                                    <li style="margin-top: 5px;">
										<img src="images/youtube.png" style="max-height: 25px;margin-left: 20px;">
									</li>
									<li style="margin-top: 5px;">
										<img src="images/deezer.png" style="max-height: 25px;margin-left: 20px;">
									</li>
									<li style="margin-top: 5px;">
										<a href="https://amzn.to/3qIthCp" target="_blank"><img src="images/amazon.png" style="max-height: 25px;margin-left: 20px;"></a>
									</li>
								</ul>
								<h4>Y en nuestro canal de Youtube</h4>
								<ul>
									<li>
										<a href="https://www.youtube.com/channel/UCVkax5Yl-QZSXm0ZM1UpXKg" target="_blank"><img src="images/youtubee.png" style="max-height: 25px;margin-left: 20px;">
									</li>
								</ul>
								<br>
								<main class="blog">
									<?
                    				$sq = $cancion->read($link);

                    				while($resultado = mysqli_fetch_array($sq)){
                        				$img = "images/cancion/".$resultado['id']."/".$resultado['img'];
                        				$video = $resultado['video'];                                  
                    				?>
									<article class="post-item">
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="row">
										    <div class="col-md-4 pull-left">
											<div class="entry">
												<div class="post-title uno">
													<a href="cancion.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a>
												</div>
												<!--/ post-title-->							
											</div>
										    </div>
											<!--/ entry-->
											<div class="col-md-8 pull-right">
											<div class="content-wrapper">
												<figure class="mr50">
													<a class="prettyPhoto kids_picture" title="<?=$resultado['titulo']?>" href="<?=$img?>"><img class="pic" src="<?=$img?>" alt="<?=$resultado['titulo']?>" height="300" width="400" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											</div>
										    </div>
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="cancion.php?id=<?=$resultado['id']?>" class="more-link cws_button"> Escuchar </a></span>
											<div class="post_cats">
												<p><span>Link :</span><a class="link" href="cancion.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a></p>
											</div>
											<!--/ post-cats -->
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<?}?>
									<!--/ post-item-->
									<!-- comments block -->
									<!-- //end comments block -->
								</main>
								<aside id="sidebar-right">
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Últimos Capítulos</h3>
											<div class="widget-content">
												<ul>
													<?
                    								$sq = $post->read4($link);

                    								while($resultado = mysqli_fetch_array($sq)){
                        								$img = "images/post/".$resultado['id']."/".$resultado['img'];                                   
                    								?>
													<li>
														<div class="kids_image_wrapper ">
															<a href="page-video.php?id=<?=$resultado['id']?>" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]"><img src="<?=$img?>" height="70"></a>
														</div>
														<div class="kids_post_content">
															<h4><a href="page-video.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a>
															<p></p>
														</div>
													</li>
													<?}?>
												</ul>
											</div>
										</div>
									</div>
								</aside>
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
	<script type="text/javascript" src='js/jquery-ui.min.js'></script>	
	<script type='text/javascript' src='js/scripts.js'></script>
	<script type='text/javascript' src='js/retina.min.js'></script>
	<script type='text/javascript' src='js/jquery.tweet.js'></script>
	<script type='text/javascript' src='js/jquery.easing-1.3.min.js'></script>
	<script type='text/javascript' src='js/owl.carousel.js'></script>
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='js/jquery.flexnav.min.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
</body>
</html>