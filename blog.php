<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    
    include_once('inc/class.crud.blog.php');
    include_once('inc/class.crud.comentario.php');

    $compania = new COMPANIA();
   
    $blog = new BLOG();
    $comentario = new COMENTARIO();

    $companiaDetails = $compania->find($link,1);
    $blogDetails = $blog->find($link, $_GET['id']);
    $img = "images/blog/".$blogDetails['id']."/".$blogDetails['img'];

    if (isset($_POST['submit'])) { 

        $nombre = $_POST['nombre'];
        $idBlog = $blogDetails['id'];
        $descripcion = $_POST['descripcion'];

        $comentario->create($link, $nombre, $fecha, $idBlog, $descripcion);
    }
    $idBlog = $blogDetails['id'];
    $comentarioDetails = $comentario->find($link, $idBlog);

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
						<h1><?=$blogDetails['titulo']?></h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb"><?=$blogDetails['titulo']?></span></li>
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
								<main class="blog">
									<article class="post-item">
										<?if(!empty($blogDetails['fecha'])){?>
										<div class="post-meta">
											<div class="post-date">
												<span class="day"><?=$blogDetails['fecha']?></span>
												
											</div>
											<!--/ post-date-->
										</div>
										<?}?>
										<!--/ post-meta-->
										<div class="post-entry">
											<?if(!empty($blogDetails['img'])){?>
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="<?=$blogDetails['titulo']?>" href="<?=$img?>"><img class="pic" src="<?=$img?>" /></a>
												</figure>
											</div>
											<?}?>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="current_crumb">
													<h1 style="font-size: 20px !important;"><?=$blogDetails['titulo']?></h1>
												</div>
												<!--/ post-title-->
												<p><?=$blogDetails['descripcion']?> </p>
												
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											
											<div class="post_cats">
												<p><span>Tags:</span><?=$blogDetails['titulo']?> - <a class="link" href="blog-group.php" target="_blank">Blog</a> - <a class="link" href="<?=$companiaDetails['instagram']?>" target="_blank">Instagram</a></p>
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
								<div id="respond_block">
                                    <?if($comentarioDetails['idBlog'] != ""){?>	
                                    <div class="comment-list" >
									    <h1>Comentarios</h1>
		                				<?
                                        $idBlog = $blogDetails['id'];
		                				$sq = $comentario->read2($link, $idBlog);
                                        
		                				while($resultado = mysqli_fetch_array($sq)){
		                    			                                  
		                				?>
		                				<div class="comment-list">
		                					<div>
			                					<div style="float: left;">
			                						Usuario : <?=$resultado['nombre']?>
			                					</div>	
			                					<div style="float: right;">
			                						Fecha : <?=$resultado['fecha']?>
			                					</div>	
			                				</div>
			                				<br><br>
			                				<div>
		                						Comentario : <?=$resultado['comentario']?>
		                					</div>

		                				</div>
		                				<hr style="margin-bottom: 20px;">
		                				<?}?>
	                			    </div>
                                    <?} else {?> 
								<!-- post comments -->
								<div class="comment-list">
								    <h1>Aún no hay Comentarios</h1>
								    <!-- post comments -->
								    
								    <!--/ post comments -->
								</div>
								<?}?>
								<!-- add comment -->
								<div class="add-comment" id="addcomments">
								    <h1>Dejanos tu Comentario</h1>
								    <div class="comment-form">
								        <div id="respond" class="comment-respond">
								            <form method="post" class="comment-form">
								                <div class="row">
								                    <label>Nombre Completo</label>
								                    <input type="text" name="nombre" class="inputtext" />
								                </div>
								               
								                <div class="row">
								                    <textarea cols="30" rows="10" name="descripcion" class="textarea" placeholder="Dejanos tu comentario"></textarea>
								                </div>
								                <p class="form-submit">
								                    <input name="submit" type="submit" class="submit" value="Comentar" />
								                    
								                </p>
								                
								            </form>
								        </div>
								        <!-- #respond -->
								    </div>
								    <!--/ comment-form -->
								</div>
								<!--/add comment -->
								</div>

								<!--/ respond -->
								<!-- //end comments block -->
									
								</main>
								<aside id="sidebar-right">
									<div class="widget widget_cws_latest_posts type-2">
										<div class="latest-posts-widget">
											<h3 class="widget-title">Últimos Posts</h3>
											<div class="widget-content">
												<ul>
													<?
				                    				$sq = $blog->read($link);

				                    				while($resultado = mysqli_fetch_array($sq)){
				                        				$img = "images/blog/".$resultado['id']."/".$resultado['img'];                                   
				                    				?>
													<li>
														<?if(!empty($resultado['img'])){?>
														<div class="kids_image_wrapper ">
															<a href="<?=$img?>" class="prettyPhoto kids_mini_picture" data-rel="prettyPhoto[rpwt]"><img src="<?=$img?>" width="90" height="70" alt=""></a>
														</div>
														<?}?>
														<div class="kids_post_content">
															<h4><a href="blog.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a></h4>
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