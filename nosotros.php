<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
  
    

    $compania = new COMPANIA();
    


    $companiaDetails = $compania->find($link,1);
    
    $page = "nosotros";
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
						<h1>Nosotros</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Nosotros</span></li>
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
											<section class='cws-widget'>
												<div><h1 class='widget-title'>Bienvenidos al Mundo de Meme y Muma</h1></div>
												<section class='cws_widget_content'>
													<p><img class="alignleft border size-medium" src="images/nosotros.jpg"  /></p>
													<h2>Hola! Somos  las creadoras de Meme y Muma. </h2>
													<p>Queremos contarte que, luego de una amplia trayectoria como profesionales de la educación infantil, la pandemia nos brindó el tiempo de alejarnos de nuestras obligaciones, para gestar este nuevo proyecto.</p>
											        <p>Con la experiencia de haber acompañado en la crianza a muchas familias, de haber brindado contención y afecto a los niños en la transición  de sus etapas evolutivas, les hemos dado a Meme y a Muma, un destello del alma de todos aquellos peques que conocimos en tantos años de profesión.</p>
											        <p>Con todo nuestro saber y nuestras vivencias acompañando la formación de muchas docentes en el ámbito institucional de la primera infancia, le hemos dado vida a Ani como guía o faro, de Meme y Muma en todas sus aventuras de crecimiento.</p>
											        <p>A su vez, con la devolución por parte de las familias de lo complejo de la comprensión por parte de sus peques de esta situación de pandemia, nos pareció oportuno acercar a modo de juego la incorporación de nuevos hábitos, y enaltecer con carácter de superhéroe, a quienes ayudan tanto a la humanidad en este momento. Así surge Superani: una heroína del nuevo mundo que, siempre que lo necesiten, allí estará.</p>
											        <p>Esos cuatro corazones, son los latidos centrales de esta serie, que poco a poco se irá revelando como un proyecto audiovisual de entretenimiento y educación para niños (EDUTAINMENT), sin dudas innovador y de vanguardia en el mundo infantil.</p>
													
														
												</section>
											</section>
										</div>
									</div>
									
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<hr />
												</section>
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