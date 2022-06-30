<?php
    include_once('inc/dbconfig.php');
    include_once('inc/class.crud.compania.php');
    include_once('inc/class.crud.post.php');
    include_once('inc/class.crud.cancion.php');
    

    $compania = new COMPANIA();
    $post = new POST();
    $cancion = new CANCION();

    $companiaDetails = $compania->find($link,1);

    $page = "home";
    
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<html class="no-ie">

<?php include_once 'includes/head.php';?>
	
	

<body data-type-of-widget="2" class="home page kids-front-page t-pattern-9">
	<!-- HEADER BEGIN -->
	<?php include_once 'includes/header.php';?>
		<!--/ #kids_header-->
		<!-- HEADER END -->
	<div class="bg-level-2-page-width-container ">
		<div class="bg-level-2 first-part" id="bg-level-2"></div>
			<div class="l-page-width">
				<div class="tp-caption kids-slider-header"><h1 style="font-size: 50px; text-align: center;">Lo mejor en educación y entretenimiento para niños pequeños</h1>
					<h2 style="font-size: 35px; text-align: center;">Disfruta y aprende junto a tu niño mediante juegos, actividades, canciones y videos</h2>
				</div>
				<div class="kids_slider_bg img_slider">
					<div class="kids_slider_wrapper">
						<div class="kids_slider_inner_wrapper">
							<div class="img-slider">
								<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
									<!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
									<div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
										<ul>
											<!-- SLIDE  -->
											<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
												<!-- MAIN IMAGE -->
												<img src="images/slide-2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<!-- LAYERS -->
												<!-- LAYER NR. 1 -->
												<div class="tp-caption kids-slider-header customin fadeout tp-resizeme" data-x="7" data-y="345" data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="600" data-start="200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="2" data-endelementdelay="0.1" data-endspeed="300">Conoce el Mundo de Meme Y Muma
												</div>
												<!-- LAYER NR. 2 
												<div class="tp-caption kids-slider-header-alt customin fadeout tp-resizeme" data-x="7" data-y="357" data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="2" data-endelementdelay="0.1" data-endspeed="300">All pages look identically great regardless of the device’s resolution and display size.
												</div>
											    -->
											</li>
											<!-- SLIDE  -->
											<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
												<!-- MAIN IMAGE -->
												<img src="images/slide-1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<!-- LAYERS -->
												<!-- LAYER NR. 1 -->
												<div class="tp-caption kids-slider-header customin fadeout tp-resizeme" data-x="7" data-y="345" data-customin="x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="600" data-start="200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300">Aprende y Crece Junto a Meme y Muma
												</div>
												<!-- LAYER NR. 2 -->
												
											</li>
											<!-- SLIDE  -->
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
								<!-- END REVOLUTION SLIDER -->
							</div>
							<!--/ #kids-slider-->
						</div>
						<!--/ .kids_slider_inner_wrapper-->
					</div>
					<!--/ .kids_slider_wrapper-->
				</div>
				<!--/ .kids_slider_bg-->
			</div>
			<!-- .l-page-width -->
			<div class="bg-level-2 second-part" id="bg-level-2"></div>
		</div>
	</div>
	</div>
	<!-- .bg-level-1 -->
	<div id="kids_middle_container">
		<!-- .content -->
		<div class="kids_top_content">
			<div class="kids_top_content_middle homepage">
				<div class="l-page-width">
					<section class="kids_posts_container clearfix">
						<div class="widget_wrapper">
							<div id="cws_benefits-5" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-2.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Potencia sus aprendizajes</h3>
									<section class="text_part">Dale a tu peque la posibilidad de potenciar sus aprendizajes de la mano de Meme y Muma!.</section>
									<a href='#aprende' class='cws_button '>Ver</a> </div>
							</div>
							<div id="cws_benefits-2" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-1.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Canta y baila con tu niño</h3>
									<section class="text_part">Disfruta bailando con tu peque al ritmo de nuestras canciones con un valioso contenido pedagógico.</section>
									<a href='#canta' class='cws_button '>Ver</a> </div>
							</div>
							<div id="cws_benefits-3" class="widget widget_cws_benefits">
								<div class="widget-icon pic"><img src="images/icon-3.png" alt /></div>
								<div class="cws-widget-content benefits_widget">
									<h3 class="widget-title">Juega junto a tu niño</h3>
									<section class="text_part">Acompaña a tu niño a descubrir todas las propuestas de juego que surgen de nuestras aventuras.</section>
									<!--<a href='#juega' class='cws_button '>Ver</a>--> </div>
							</div>
						</div>
					</section>
				</div>
				<div class="bottom-border"></div>
			</div>
			<!-- .kids_top_content_middle -->
		</div>
		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container no-padding">
				<div class="bg-level-2 first-part" id="bg-level-2"></div>
				<section class="kids_bottom_content_container">
					<!-- ***************** - START Image floating - *************** -->
					<div class="page-content">
						<div class="container l-page-width">
							<div class="entry-container ">
								<main>
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<section class='cws-widget' id="aprende">
															<div class='widget-title'>Potencia sus aprendizajes</div>
															<section class='cws_widget_content'>
																<p>Dale a tu peque la posibilidad de potenciar sus aprendizajes de la mano de Meme y Muma!.</p>	   
															</section>
														</section>
														<div class="projects_carousel blog clearfix" data-carousel-column="3">
															<?
                    										$sq = $post->read($link);

                    										while($resultado = mysqli_fetch_array($sq)){
                        										$img = "images/post/".$resultado['id']."/".$resultado['img'];
                        										if($resultado['id'] > 21 and $resultado['id'] < 26){                                   
                    										?>
															<div class="iso-item">
																<article class="post-item">
																	
																	<div class="post-entry">
																		<div class="content-wrapper alignleft">
																			<figure>
																				<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" href="<?=$img?>"><img class="pic" src="<?=$img?>" /></a>
																			</figure>
																		</div>
																		<div class="entry">
																			<div class="post-title">
																				<a href="page-video.php?id=<?=$resultado['id']?>"><?=$resultado['titulo']?></a>
																			</div>
																			
																		</div>
																	</div>
																	<div class="post-footer">
																		<span class="l-float-right"><a href="page-video.php?id=<?=$resultado['id']?>" class="more-link cws_button">
					                                                    Ver Capítulo</a>
					                                                    </span>
																		<div class="post_cats">
																			<p><span>Link :</span><a class="link" href="page-video.php?id=<?=$resultado['id']?>" title="<?=$resultado['titulo']?>"><?=$resultado['titulo']?></a></p>
																		</div>
																		
																		<div class="kids_clear"></div>
																	</div>
																</article>
															</div>
															<?}}?>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
												</section>
											</section>
										</div>
									</div>	
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<section class='cws-widget' id="canta">
															<div class='widget-title'>Canta y baila con tu niño</div>
															<section class='cws_widget_content'>
																<p>Disfruta bailando con tu peque al ritmo de nuestras canciones con un valioso contenido pedagógico.</p>	   
															</section>
														</section>
														<div class="projects_carousel clearfix" data-carousel-column="4">
															<?
                    										$sq = $cancion->read2($link);

                    										while($resultado = mysqli_fetch_array($sq)){
                        										$img = "images/cancion/".$resultado['id']."/".$resultado['img'];
                        										                                   
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
																<div><a href="cancion.php?id=<?=$resultado['id']?>" class="cws_button" target="_blank">Escuchar</a></div>
															</div>
															<?}?>
														</div>
														<!--/ .projects-carousel -->
													</div>
													<!--/ .work-carousel-->
													<hr />
													<p>&nbsp;</p>
												</section>
											</section>
										</div>
									</div>
									<!--
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-12'>
											<section class='cws-widget'>
												<section class='cws-widget' id="juega">
	                                                <div class="recent_projects ">
														<section class='cws_widget_content'>
															<div class='widget-title'>Juega junto a tu niño</div>
															<p>Acompaña a tu niño a descubrir todas las propuestas de juego que surgen de nuestras aventuras.</p>	   
														</section>
													<div class="projects_carousel blog clearfix" data-carousel-column="3">
														<div class="iso-item">
															<article class="post-item">
																<div class="post-entry">
																	<div class="content-wrapper alignleft">
																		<figure>
																			<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" href="images/juego1.jpg"><img class="pic" src="images/juego1.jpg" /></a>
																		</figure>
																	</div>
																	<div class="entry">
																		<div class="title">Ayuda a Meme</div>
																		
																	</div>
																</div>
																<div class="post-footer">
																	<span class="l-float-right"><a href="<?=$companiaDetails['instagram']?>" target="_blank" class="more-link cws_button">
				                                                    Jugar!</a>
				                                                    </span>
																	<div class="post_cats">
																		<p><span>Link :</span><a class="link" href="<?=$companiaDetails['instagram']?>" target="_blank" title="Juego de Instagram">Juegos</a></p>
																	</div>
																	
																	<div class="kids_clear"></div>
																</div>
															</article>
														</div>
														<div class="iso-item">
															<article class="post-item">
																<div class="post-entry">
																	<div class="content-wrapper alignleft">
																		<figure>
																			<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" href="images/juego2.jpg"><img class="pic" src="images/juego2.jpg" /></a>
																		</figure>
																	</div>
																	<div class="entry">
																		<div class="title">Descubrí el personaje</div>
																		
																	</div>
																</div>
																<div class="post-footer">
																	<span class="l-float-right"><a href="<?=$companiaDetails['instagram']?>" target="_blank" class="more-link cws_button">
				                                                    Jugar!</a>
				                                                    </span>
																	<div class="post_cats">
																		<p><span>Link :</span><a class="link" href="<?=$companiaDetails['instagram']?>" target="_blank" title="Juego de Instagram">Juegos</a></p>
																	</div>
																	
																	<div class="kids_clear"></div>
																</div>
															</article>
														</div>
														<div class="iso-item">
															<article class="post-item">
																<div class="post-entry">
																	<div class="content-wrapper alignleft">
																		<figure>
																			<a data-rel="prettyPhoto[lt_posts]" class="prettyPhoto kids_picture" href="images/juego3.jpg"><img class="pic" src="images/juego3.jpg" /></a>
																		</figure>
																	</div>
																	<div class="entry">
																		<div class="title">Encontrá los juguetes</div>
																		
																	</div>
																</div>
																<div class="post-footer">
																	<span class="l-float-right"><a href="<?=$companiaDetails['instagram']?>" target="_blank" class="more-link cws_button">
				                                                    Jugar!</a>
				                                                    </span>
																	<div class="post_cats">
																		<p><span>Link :</span><a class="link" href="<?=$companiaDetails['instagram']?>" target="_blank" title="Juego de Instagram">Juegos</a></p>
																	</div>
																	
																	<div class="kids_clear"></div>
																</div>
															</article>
														</div>

													</div>
												</div>
												</section>
											</section>
										</div>
									</div>
									-->
									<!--
									<div class='grid-row clearfix'>
										<div class='grid-col grid-col-4'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class='shortcode_carousel' data-carousel-column="1">
														<div class='carousel_header clearfix'>
															<div class='widget-title'>Testimonials</div>
														</div>
														<div class='carousel_content'>
															<ul>
																<li>
																	<div class="testimonial clearfix">
																		<div>
																			<img src='pic/100x100-img-1.jpg' alt />
																			<p>
																				Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctorhe ndrerit nec. </p>
																		</div>
																		<div class="author">
																			Jane Doe </div>
																	</div>
																	<div class="testimonial clearfix">
																		<div>
																			<img src='pic/100x100-img-2.jpg' alt />
																			<p>
																				Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit. </p>
																		</div>
																		<div class="author">
																			Jane Doe </div>
																	</div>
																</li>
																<li>
																	<div class="testimonial clearfix">
																		<div>
																			<img src='pic/100x100-img-2.jpg' alt />
																			<p>
																				Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit.Aliquam ipsum dui. </p>
																		</div>
																		<div class="author">
																			Jane Doe </div>
																	</div>
																	<div class="testimonial clearfix">
																		<div>
																			<img src='pic/100x100-img-1.jpg' alt />
																			<p>
																				Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctor. </p>
																		</div>
																		<div class="author">
																			Jane Doe </div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</section>
											</section>
										</div>
										<div class='grid-col grid-col-4'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="recent_projects ">
														<h3 class="section-title">Mini Gallery</h3>
														<div class="projects_carousel clearfix" data-carousel-column="1">
															<div class="iso-item">
																<div class="content-wrapper">
																	<figure>
																		<a data-rel="prettyPhoto[rs_projects]" class="prettyPhoto kids_picture" href="http://www.youtube.com/watch?v=HwXbtZXjbVE" title="Project 5"><img src="pic/347x347-img-2.jpg" alt="" /> </a>
																	</figure>
																</div>
															</div>
															<div class="iso-item">
																<div class="content-wrapper">
																	<figure>
																		<a data-rel="prettyPhoto[rs_projects]" class="prettyPhoto kids_picture" href="pic/HappyFeet_4th5.jpg" title="Project 4"><img src="pic/347x347-img-3.jpg" alt="" /> </a>
																	</figure>
																</div>
															</div>
															<div class="iso-item">
																<div class="content-wrapper">
																	<figure>
																		<a data-rel="prettyPhoto[rs_projects]" class="prettyPhoto kids_picture" href="pic/HappyFeet_3rd4.jpg" title="Project 3"><img src="pic/347x347-img-1.jpg" alt="" /> </a>
																	</figure>
																</div>
															</div>
														</div>
														<!-/ .projects-carousel ->
													</div>
													<!-/ .work-carousel->
												</section>
											</section>
										</div>
										<div class='grid-col grid-col-4'>
											<section class='cws-widget'>
												<section class='cws_widget_content'>
													<div class="single_bar with_title">
														<div class="title">Integer sollicitudin</div>
														<div class="scale">
															<div class="progress" data-value="89" style="background-color:#ffdb5e;"></div>
														</div>
													</div>
													<div class="single_bar with_title">
														<div class="title">Phasellus eleifend</div>
														<div class="scale">
															<div class="progress" data-value="69" style="background-color:#f2a1b0;"></div>
														</div>
													</div>
													<div class="single_bar with_title">
														<div class="title">Fusce in magna</div>
														<div class="scale">
															<div class="progress" data-value="42" style="background-color:#3185cb;"></div>
														</div>
													</div>
													<div class="single_bar with_title">
														<div class="title">Etiam a dignissim nisl</div>
														<div class="scale">
															<div class="progress" data-value="79" style="background-color:#8ddd67;"></div>
														</div>
													</div>
													<div class="single_bar with_title">
														<div class="title">Morbi nec purus</div>
														<div class="scale">
															<div class="progress" data-value="55" style="background-color:#ff5c5c;"></div>
														</div>
													</div>
													<div class="single_bar with_title">
														<div class="title">Hendrerit nec mollis</div>
														<div class="scale">
															<div class="progress" data-value="72" style="background-color:#8fc0ea;"></div>
														</div>
													</div>
												</section>
											</section>
										</div>
									</div>
								    -->
									<!-- comments block -->
									<!-- //end comments block -->
								</main>
								<div class="kids_clear"></div>
							</div>
							<!-- .entry-container -->
						</div>
					</div>
					<!-- ***************** - END Image floating - *************** -->
				</section>
				<!-- .bottom_content_container -->
				<div class="bg-level-2 second-part" id="bg-level-2"></div>
			</div>
			<div class="content_bottom_bg"></div>
		</div>
	</div>
	<!-- .end_content -->
	<!-- FOOTER BEGIN -->
	<?php include_once 'includes/footer.php';?>
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type="text/javascript" src="revslider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="revslider/jquery.themepunch.tools.min.js"></script>	
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
