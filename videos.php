<?php
    include_once('inc/dbconfig.php'); 
    include_once('inc/class.crud.compania.php');
    include_once('inc/class.crud.post.php');
    

    $compania = new COMPANIA();
    $post = new POST();


    $companiaDetails = $compania->find($link,1);

    $page = "videos";

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
						<h1>Videos</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Videos</span></li>
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
									    <div class='grid-col'>
											<h3 class="widget-title" style="text-align: center;margin-top: 30px;">Las Aventuras de Meme y Muma</h3>
											<p>Si bien no hay una secuencia en el relato de la historia y cada capítulo puede disfrutarse por separado, es importante tener en cuenta que, en cada uno de ellos encontrarán:</p>
											<ul>
												<li>Contenido pedagógico de las distintas áreas del desarrollo.</li>
											    <li>Propuestas para la incorporación de hábitos.</li>
												<li>Canciones.</li>
												<li>Transmisión de valores.</li>
											</ul> 
											<p>A continuación, podrán leer una sinopsis de cada capítulo.<br>
												Para poder verlos, pueden acceder desde aquí a nuestro canal de Youtube: <a href="https://www.youtube.com/channel/UCVkax5Yl-QZSXm0ZM1UpXKg" target="_blank">(Meme y Muma)</a> o bien a cada capítulo desde el link especificado junto a cada descripción.
											</p>
										</div>
									</div>
					            </main>
				            </div>
				        </div>
						<div class="container l-page-width">
							<div class="entry-container single-sidebar">
								<aside id="sidebar-left">
									<div class="widget widget_archive">
										<h3 class="widget-title">Capítulos</h3>
										<ul>
											<li><a href='videos.php#temporada1'>Temporada 1</a></li>
											<li><a href='videos.php#temporada2'>Temporada 2</a></li>
										</ul>
									</div>
								</aside>
								<main class="blog">
									<h3 class="widget-title" id="temporada1">Temporada 1</h3>
									<?
                    				$sq = $post->read3($link);

                    				while($resultado = mysqli_fetch_array($sq)){
                        				$img = "images/post/".$resultado['id']."/".$resultado['img'];
                        				                                  
                    				?>
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day"><?=$resultado['posicion'];?></span>
												
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="<?=$resultado['titulo']?>" href="<?=$img?>"" target="_blank"><img class="pic" src="<?=$img?>" alt="" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="page-video.php?id=<?=$resultado['id']?>" target="_blank"><?=$resultado['titulo']?></a>
												</div>
												<!--/ post-title-->
												
												<p> <?=$resultado['descripcion']?> </p>
												
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="page-video.php?id=<?=$resultado['id']?>" class="more-link cws_button" target="_blank"> Ver Capítulo </a></span>
											<div class="post_cats">
												<p><span>Link del Video :</span><a class="link" href="page-video.php?id=<?=$resultado['id']?>" target="_blank"><?=$resultado['titulo'];?></a></p>
											</div>
											<!--/ post-cats -->
											<?if(!empty($resultado['cancion'])){?>
											<div class="post_tags">
												<p><span>Link de la Canción :</span>
													<a href='<?=$resultado['cancion']?>' title='Tag' class='link' target="_blank">Escuchala Aquí</a> </p>
											</div>
											<?}?>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
								    <?}?>
								    <h3 class="widget-title" id="temporada2">Temporada 2</h3>
									<?
                    				$sq = $post->read($link);

                    				while($resultado = mysqli_fetch_array($sq)){
                        				$img = "images/post/".$resultado['id']."/".$resultado['img'];
                        				if($resultado['id'] > 15 and $resultado['id'] < 26 ){                                   
                    				?>
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day"><?=$resultado['posicion'];?></span>
												
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="<?=$resultado['titulo']?>" href="<?=$img?>" target="_blank"><img class="pic" src="<?=$img?>" alt="" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="page-video.php?id=<?=$resultado['id']?>" target="_blank"><?=$resultado['titulo'];?></a>
												</div>
												<!--/ post-title-->
												
												<p> <?=$resultado['descripcion'];?> </p>
												
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="page-video.php?id=<?=$resultado['id']?>" class="more-link cws_button" target="_blank"> Ver Capítulo </a></span>
											<div class="post_cats">
												<p><span>Link del Video :</span><a class="link" href="page-video.php?id=<?=$resultado['id']?>" target="_blank"><?=$resultado['titulo'];?></a></p>
											</div>
											<!--/ post-cats -->
											<?if(!empty($resultado['cancion'])){?>
											<div class="post_tags">
												<p><span>Link de la Canción :</span>
													<a href='<?=$resultado['cancion'];?>' class='link' target="_blank">Escuchala Aquí</a> </p>
											</div>
											<?}?>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
								    <?}}?>
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
