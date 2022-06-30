<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    include_once('inc/class.crud.post.php');
    

    $compania = new COMPANIA();
    $post = new POST();


    $companiaDetails = $compania->find($link,1);
    $postDetails = $post->find($link, $_GET['id']);
    $video = $postDetails['video'];
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
						<h1><?=$postDetails['titulo']?></h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb"><?=$postDetails['titulo']?></span></li>
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
									<div class='grid-row clearfix' style='margin-top:0px;'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<p style="font-size: 20px;"><?=$postDetails['descripcion']?></p>
													<p style="text-align: center;">
													<?if (strpos($video,'youtube') == true) {
								                      $video = substr($video,-11);
								                      ?>
								                      <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?=$video?>?rel=0"  allowfullscreen frameborder="0"></iframe>
								                      <?
								                    }else{
								                      $video = substr($video,-9);
								                      $video = str_replace("/", "", $video);
								                      $video = str_replace("m", "", $video);
								                      ?>
								                      
								                      <iframe src="https://player.vimeo.com/video/<?=$video?>" width="100%" height="500"  webkitallowfullscreen mozallowfullscreen allowfullscreen border="0" style="border:0px;"></iframe> 
					          		                 <?}?>
						
													</p>
												</section>
											</section>
										</div>
									</div>
									<!-- comments block -->
									<!-- //end comments block -->
								</main>
								<hr>
								<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Más Capítulos</h3>
														<div class="projects_carousel clearfix" data-carousel-column="4">
															<?
                    										$sq = $post->read($link);

                    										while($resultado = mysqli_fetch_array($sq)){
                        										$img = "images/post/".$resultado['id']."/".$resultado['img'];                                   
                    										?>
															<div class="iso-item">
																<div class="content-wrapper">
																	<figure>
																		<a data-rel="prettyPhoto[rs_projects]" class="prettyPhoto kids_picture" href="<?=$img?>" title="<?=$resultado['titulo'];?>" target="_blank"><img src="<?=$img?>" alt="" /> </a>
																	</figure>
																</div>
																<div class="gallery-text">
																	<div class="title"><?=$resultado['titulo'];?></div>
																	
																</div>
																<div><a href="page-video.php?id=<?=$resultado['id']?>" class="cws_button" target="_blank">Ver Capítulo</a></div>
															</div>
															<?}?>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
												</section>
											</section>
										</div>
									</div>
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