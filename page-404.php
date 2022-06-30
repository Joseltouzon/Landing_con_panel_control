<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    

    $compania = new COMPANIA();
    


    $companiaDetails = $compania->find($link,1);

?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie">

<?include_once 'includes/head.php';?>

<body data-type-of-widget="2" class="error404 secondary-page t-pattern-1">
	<!-- HEADER BEGIN -->
	<?include_once 'includes/header.php';?>
		<!--/ #kids_header-->
		<!-- HEADER END -->
	</div>
	<!-- .bg-level-1 -->
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<!-- .middle_cloud -->
			<div class="kids_top_content_head">
				<div class="kids_top_content_head_body"></div>
			</div>
			<!-- .kids_top_content_head -->
			<div class="kids_top_content_middle">
				<div class="header_container ">
					<div class="l-page-width">
						<h1>Shop</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Shop</span></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .kids_top_content_middle -->
			<div class="kids_top_content_footer"></div>
			<!-- .end_middle_cloud -->
		</div>
		<!-- .end_middle_cloud  -->
		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container no-padding">
				<section class="kids_bottom_content_container">
					<!-- ***************** - START Image floating - *************** -->
					<div class="page-content">
						<div class="bg-level-2 first-part"></div>
						<div class="container l-page-width">
							<div class="entry-container single-sidebar">
								<main>
									<div class="holder404">
										<div class="e404">
											<h1>Shop</h1>
											<div class="title_error">
												<span></span>
												<div>En Construcción</div>
											</div>
										</div>
										<div class="kids_clear"></div>
										<div class="description_error">
											Proximamente Podras Disfrutar de Nuestra Tienda Online.
											<br />
										</div>
									</div>
									<!--/ 404-holder-->
								</main>
								<aside id="sidebar-right">
									
									<div id="cws_nav-3" class="widget widget_cws_nav type-2 type-2">
										<h3 class="widget-title">Links Rápidos</h3>
										<div class="widget-content">
											<div class="nav_cat">
												<ul id="nav-139" class="menu">
													<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.php">Home</a></li>
													<li class="menu-item menu-item-has-children"><a href="nosotros.php">Nosotros</a></li>
													<li class="menu-item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="ofrecemos.php">Qué Ofrecemos</a></li>
													<li class="menu-item menu-item-has-children"><a href="amigurumis.php">Amigurumis</a></li>
													<li class="menu-item menu-item-has-children"><a href="mym.php">Se Parte de MyM</a></li>
													<li class="menu-item menu-item-has-children"><a href="canciones.php">Canciones</a></li>
													<li class="menu-item menu-item-has-children"><a href="videos.php">Videos</a></li>
					
													<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#">Blog</a></li>
													
													<li class="menu-item"><a href="page-contact.php">Contacto</a></li>
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
						<!-- ***************** - END Image floating - *************** -->
					</div>
				</section>
				<!-- .bottom_content_container -->
			</div>
			<div class="content_bottom_bg"></div>
		</div>
	</div>
	<!-- .end_content -->
	<!-- FOOTER BEGIN -->
	<?include_once 'includes/footer.php';?>
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type="text/javascript" src='js/jquery-ui.min.js'></script>	
	<script type='text/javascript' src='js/scripts.js'></script>
	<script type='text/javascript' src='js/retina.min.js'></script>
	<script type='text/javascript' src='js/jquery.lavalamp-1.4.min.js'></script>	
	<script type='text/javascript' src='js/jquery.tweet.js'></script>
	<script type='text/javascript' src='js/jquery.easing-1.3.min.js'></script>
	<script type='text/javascript' src='js/owl.carousel.js'></script>
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='js/jquery.flexnav.min.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
</body>
</html>