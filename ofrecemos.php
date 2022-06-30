<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    

    $compania = new COMPANIA();
    


    $companiaDetails = $compania->find($link,1);

    $page = "ofrecemos";

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
						<h1>Qué ofrecemos</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li>
							<span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Qué ofrecemos</span></li>
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
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<div>
													<h1 class='widget-title' style="text-align: center; margin-bottom: 30px;">Entretenimiento y educación infantil: "EDUTAINMENT"</h1>
												</div>
												<section class='cws_widget_content'>
													<p>Meme y Muma es un nuevo concepto en entretenimiento y educación infantil, que pretende atravesar el desafío digital, para transformarse en una experiencia vivencial para los peques.<br> Centrados en despertar la motivación e inspiración  de la primera infancia a través de propuestas de aventuras educativas, es nuestro objetivo, continuar desarrollando un producto transmedial en el cual, los más chiquitos encuentren un mundo amoroso, sembrado de oportunidades de desarrollo, aprendizajes y entretenimiento.</p>
												</section>
											</section>
										</div>
									</div>
									<!--<div class='grid-row clearfix'>
										<div class='grid-col grid-col-6'>
											<section class='cws-widget'>
												<div class='widget-title'>1/2 Column</div>
												<section class='cws_widget_content'>
													<p>Lorem ipsum dolor sit amet, consectetuer adipising elit, sed diam nonummy nibh euismod tincint ut laoreet dolore magna aliquam erat volutpatt wisi enim ad minim venia, quis nostr.ud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisimcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputateOne half</p>
													<p>Lorem ipsum dolor sit amet, consectetuer adipising elit, sed diam nonummn ibh euismod tincidnt ut laoreet dolore magna aliquam erat volutpatt wisi enima ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
												</section>
											</section>
										</div>
										<div class='grid-col grid-col-6'>
											<section class='cws-widget'>
												<div class='widget-title'>1/2 Column</div>
												<section class='cws_widget_content'>
													<p>Lorem ipsum dolor sit amet, consectetuer adipising elit, sed diam nonummy nibh euismod tincint ut laoreet dolore magna aliquam erat volutpatt wisi enim ad minim venia, quis nostr.ud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisimcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputateOne half</p>
													<p>Lorem ipsum dolor sit amet, consectetuer adipising elit, sed diam nonummn ibh euismod tincidnt ut laoreet dolore magna aliquam erat volutpatt wisi enima ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
												</section>
											</section>
										</div>
									</div>-->
								</main>
							<div class="container l-page-width" style="margin-top: 50px;">
							<div class="entry-container ">
								<main>
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<div >
											<section class='cws-widget grid-col-6 grid-col' style="float: left;">
												<section class='cws_widget_content'>
													<h1 style="text-align: center;">Entretenimiento</h1>
													
													<p><img class="aligncenter border size-full" src="images/ofrecemos-1.png" alt="fully-responsive" width="670" height="574" /></p>
													<p>&nbsp;</p>
												</section>
											</section>
										    </div>
										    <div >
											<section class='cws-widget grid-col-6 grid-col' style="float: right;">
												<section class='cws_widget_content'>
													<h1 style="text-align: center;">Educación Infantil</h1>
													
													<p><img class="aligncenter border size-full" src="images/ofrecemos-2.png" alt="color" width="669" height="571" />
														<br />
												</section>
											</section>	
											</div>									
										</div>
									</div>
									<!-- comments block -->
									<!-- //end comments block -->
								</main>
								<div class="kids_clear"></div>
							</div>
							<!-- .entry-container -->
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