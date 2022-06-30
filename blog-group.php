<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    include_once('inc/class.crud.post.php');
    include_once('inc/class.crud.cancion.php');
    include_once('inc/class.crud.blog.php');
    

    $compania = new COMPANIA();
    $post = new POST();
    $cancion = new CANCION();
    $blog = new BLOG();

    $companiaDetails = $compania->find($link,1);
    $blogDetails = $blog->find($link, $_GET['id']);
    
    $page = "blog";
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie">

<?php include_once'includes/head.php';?>

<body data-type-of-widget="2" class="page secondary-page t-pattern-9">
	<!-- HEADER BEGIN -->
	<?php include_once'includes/header.php';?>
	</div>
	<!-- .bg-level-1 -->
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle ">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>MyM Blog</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">MyM Blog</span></li>
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
							<main>
								<div class='grid-row clearfix'>
								    <div class='grid-col grid-col-12'>
										<h1 class="widget-title" style="text-align: center;margin-top: 30px;color:#3185cb;font-size: 32px;">Te queremos contar…</h1>
										<p>En esta sección, abrimos otro canal de comunicación con todos Uds., nuestra comunidad, en quienes pensamos cuando proyectamos, entre otras cosas, nuestros videos para niños.</p>
										<p>Ya les contamos de nuestra trayectoria en educación infantil, ahora nos gustaría contarles, algunos datos curiosos de la producción de nuestros videos infantiles.</p>
										<p>Como el proyecto surgió en plena cuarentena cerrada, toda su gestión fue por zoom! El casting, la formación del equipo de trabajo de todos los profesionales necesarios, fue todo un desafío. Cuando se empezaron a autorizar las actividades, se rodaron todos los videos de la primer temporada, en una sola jornada. Pensar las canciones para los niños/peques, los personajes y darles su alma, las historias y aventuras que atravesarían, fue sin duda, una etapa de mucha creatividad. El vestuario, el maquillaje, la utilería, cada detalle pensado y cuidado con mucho compromiso y amor. </p>
										<p>En cada uno de nuestros videos para niños, está condensado nuestro niño interior y el océano de aventuras que le gustaría vivir.</p>
									</div>
								</div>
				            </main>
				            <hr style="margin-bottom: 30px;">
							<div class="entry-container double-sidebar">
								<aside id="sidebar-left">
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Canciones</h3>
											<div class="widget-content">
												<ul>
													<?
                    								$sq = $cancion->read2($link);

                    								while($resultado = mysqli_fetch_array($sq)){
                        								$img = "images/cancion/".$resultado['id']."/".$resultado['img'];                                   
                    								?>
													<li>
														<div class="kids_image_wrapper ">
															<a href="cancion.php?id=<?=$resultado['id']?>" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]"><img src="<?=$img?>" height="70"></a>
														</div>
														<div class="kids_post_content">
															<h4><a href="cancion.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a>
															<p></p>
														</div>
													</li>
													<?}?>
												</ul>
											</div>
										</div>
									</div>
								</aside>
								<main class="blog">
									<?
                    				$sq = $blog->read($link);

                    				while($resultado = mysqli_fetch_array($sq)){
                        				$img = "images/blog/".$resultado['id']."/".$resultado['img'];                                   
                    				?>
									<article class="post-item">
										<div class="post-meta">
											
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<?if(!empty($resultado['img'])){?>
											<div class="content-wrapper aligncenter">
												<figure>
													<a class="prettyPhoto kids_picture" title="<?=$resultado['titulo']?>" href="<?=$img?>"><img class="pic" src="<?=$img?>" /></a>
												</figure>
											</div>
											<?}?>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="blog.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a>
												</div>
												<!--/ post-title-->
												
												<p><?=$resultado['intro']?></p>
												
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog.php?id=<?=$resultado['id']?>" class="more-link cws_button"> Leer Más </a></span>
											<div class="post_cats">
												<p><span>Tags:</span><a class="link" href="blog.php?id=<?=$resultado['id']?>" target="_blank"><?=$resultado['titulo']?></a> - <a class="link" href="<?=$resultado['cancion']?>" target="_blank">Canción</a> - <a class="link" href="<?=$companiaDetails['instagram']?>" target="_blank">Instagram</a></p>
											</div>
											<!--/ post-cats --
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a> </p>
											</div>
											<--/ post-tags -->
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
									<!-- widget latest post -->
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Algunos Capítulos</h3>
											<div class="widget-content">
												<ul>
													<?
                    								$sq = $post->read2($link);

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
									<!-- / widget latest post -->
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
	<?php include_once'includes/footer.php';?>

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
