<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    
    

    $compania = new COMPANIA();
   


    $companiaDetails = $compania->find($link,1);

    $page = "amigurumis";

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
						<h1>Nuestros Personajes</h1>
						<ul id="breadcrumbs">
							<li><a href="index.php" title="Home">Home</a></li> <span class="delimiter">&gt;</span>
							<li><span class="current_crumb">Nuestros Personajes</span></li>
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
												<div><h1 class='widget-title aligncenter'>Te presentamos a los personajes de nuestras aventuras</h1></div>
												<div class='cws_widget_content grid-col-6'>
													<div><h2  class='widget-title'>MEME</h2></div>
													<p>Meme es un niño pequeño, curioso, atento, sociable y un tanto sensible. Tiene alma de niño amoroso y a su vez un poco pícaro. Está en la conquista de mayor independencia. Sin embargo, aún disfruta del apoyo de Ani (o Super Ani) en algunas circunstancias. Construye vínculos de amistad genuinos, transparentes, y se siente en ese ambiente. Es inocente, activo, divertido y solidario: está atento a las necesidades de los demás y siempre está dispuesto a ayudar.</p>
													<p><img class="aligncenter border size-medium" src="images/meme.jpg" /></p>
												</div>

												<div class='cws_widget_content grid-col-6' style="float: right;">
													<div><h2  class='widget-title'>MUMA</h2></div>
													<p>Muma es una niña pequeña muy dulce, sensible, y en ocasiones un tanto vulnerable. Es participativa, creativa, tranquila, y abierta a toda propuesta de juego y oportunidad. Meme es su amigo del alma y con él ha construído un vínculo más estrecho que disfruta en todas las aventuras que viven juntos. Siente la contención de Ani y Super Ani, especialmente en los momentos que debe resolver situaciones que siente que no puede enfrentar sola. Sin embargo, poquito a poquito, logra empoderarse.</p>
													<img class="aligncenter border size-medium" src="images/muma.jpg" />
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
												<div class='cws_widget_content grid-col-6'>
													<div style="margin-top: 20px;"><h2 class='widget-title'>PIPPA</h2></div>
													<p>Pippa es el juguete de apego de Meme y  lo acompaña en todas sus aventuras. Le brinda seguridad, contención y compañia. Es la ovejita más dulce, tierna y amorosa que existe. A su vez, la amistad que ha logrado con Muma y Ani, la habilita para estar presente en cada nuevo desafío que se les presenta.</p>
													<p><img class="aligncenter border size-medium" src="images/pippa.jpg" /></p>
												</div>

												<div class='cws_widget_content grid-col-6' style="float: right;">
													<div style="margin-top: 20px;"><h2 class='widget-title'>ANI</h2></div>
													<p>Ani es una niña más grande que Meme y Muma, con retazos de alma de maestra en su corazón. Es alegre, simpática, divertida y muy musical. Es ocurrente y creativa, le gusta jugar. Es auténtica con sus sentimientos, por eso Meme y Muma confían y se sienten seguros con ella. Es un tanto inocente aún, pero a su vez, valiente y atrevida para encarar nuevas aventuras. Si surge alguna complicación en las mismas, aflora desde un rincón de su corazón y a consecuencia de un nuevo hábito a incorporar en este “nuevo mundo” la heroína “Super Ani” que ayudará al grupo de amigos, sin esperar nada  a cambio: como una verdadera amiga!</p>
													<img class="aligncenter border size-medium" src="images/ani.jpg" />
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
												<div class='cws_widget_content'>
													<div style="margin-top: 20px;"><h2 class='widget-title'>SUPER ANI</h2></div>
													<p>SuperAni es el “Otro yo” de Ani y representa a los “Otro yo” que cada uno de nosotros tenemos en nuestra personalidad. Ese personaje superpoderoso que aparece ante las dificultades y que soluciona aquello que, en la vida cotidiana, pareciera no tener solución. Nacida en pandemia, su poder se lo otorga el alcohol en gel, acompañado de la frase mágica... “Tipi toi tipi toi una vuelta y aquí estoy”. De ese modo, Superani despliega todo su potencial para ayudar a Meme y Muma, en todo lo que necesiten.</p>
													<p><img class="aligncenter border size-medium" src="images/superani.jpg" /></p>
												</div>
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

									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<div class='widget-title'>Por Qué Amigurumis</div>
												<section class='cws_widget_content'>
													
													<p>Un amigurumi es, en la cultura japonesa, un objeto tierno, amoroso, adorable. Según la tradición, cada amigurumi posee un “alma” que lo convierte en el compañero y confidente de por vida de su dueño, brindándole protección y consuelo en momentos difíciles de su vida.</p>
													
											        <p>Si bien no tenemos ancestros de origen japonés, siendo muy chiquitas y con una mamá que tenía ocupaciones dentro y fuera del hogar, pasábamos varias horas al día con nuestros abuelos maternos. Siempre con amor y esmero, nuestra querida abuela encontraba el modo de enseñarnos cómo entretenernos y, sin buscarlo especialmente, cómo ayudarnos a descubrir lo que nos gustaba hacer. Así es como aún antes de haber aprendido a leer y escribir, habíamos aprendido a tomar una aguja de crochet y a tejer elementos simples, que, con el correr del tiempo, se fueron complejizando gradualmente.</p>
											        
											        <p>Con el correr de los años fuimos recorriendo nuestras vidas y el tejido al crochet quedó como un recuerdo amoroso de la infancia. Pero, a veces, las casualidades no son taaaaan “casuales”. Así, la vida nos sorprendió con un período de pandemia en el que el alma se aquietó, y en el que nuestra experiencia de muchos años con niños pequeños  hizo florecer nuestro sueño de plasmar un proyecto formativo con personajes creados por nosotras.</p>
											        <p>Aquellos momentos vividos junto a la abuela se unieron a nuestro sueño, y fue así como Meme y Muma cobraron vida en una aguja e hilo de crochet.</p>
											        
											        <p>A veces, pensamos que, en realidad, ellos siempre estuvieron escondidos en algún lugarcito de nuestro corazón, esperando para asomarse en el momento más oportuno, pero lo cierto es que, más allá de eso, son la conjunción de nuestro espíritu y nuestra pasión, y deseamos que puedan transmitir a los niños todo lo que deseamos para ellos.</p>
											        <p><img class="alignleft border size-medium" src="images/Amigurumis-web-1.jpg" /></p>
											        <p><img class="alignright border size-medium" src="images/Amigurumis-ovillos-web-1.jpg" /></p>
													
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