<div class="top-panel">
	<div class="l-page-width clearfix">
		<div class="wrapper">
			<div class="widget widget_cws_tweets">
				<div class='cws-widget-content '>
					<div class="latest_tweets ">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ .top-panel-->
<div class="kids-bg-level-1">
	<div class="bg-level-1"></div>
	<header id="kids_header">
		<div class="l-page-width clearfix">
			<ul class="kids_social">

				<li><a href="<?= $companiaDetails['instagram'] ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a><span style="background-color:#dd4b39;"></span></li>
				<li><a href="<?= $companiaDetails['facebook'] ?>" title="Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><span style="background-color:#3b5998;"></span></li>
				<li><a href="<?= $companiaDetails['youtube'] ?>" title="Youtube" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a><span style="background-color:#b31217;"></span></li>


			</ul>
			<!-- .kids_social -->
			<div class="kids_clear"></div>
			<div id="kids_logo_block" class="logo-position-left">
				<a href="index.php"><img src="images/compania/<?= $companiaDetails['id'] ?>/<?= $companiaDetails['logo'] ?>" style="max-height: 150px;" /></a>
			</div>
			<nav id="kids_main_nav" class="menu-position-right">
				<div class="menu-button">
					<span class="menu-button-line"></span>
					<span class="menu-button-line"></span>
					<span class="menu-button-line"></span>
				</div>
				<ul id="menu-main" class="clearfix flexnav " data-breakpoint="800">
					<li <? if ($page === "home") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="index.php">Home</a></li>
					<li <? if ($page === "nosotros") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="nosotros.php">Nosotros</a></li>
					<li <? if ($page === "ofrecemos") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="ofrecemos.php">Qué Ofrecemos</a></li>
					<li <? if ($page === "amigurumis") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="amigurumis.php">Amigurumis</a></li>
					<li <? if ($page === "canciones") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="canciones.php">Canciones</a></li>
					<li <? if ($page === "videos") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="videos.php">Videos</a></li>
					<li <? if ($page === "mym") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="mym.php">Participa de Meme y Muma</a></li>

					<!--<li class="menu-itemmenu-item-has-children"><a href="portfolio-full-width.html">Portfolio</a>
							<ul class="sub-menu">
								<li class="menu-item-has-children"><a href="#">Columns</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="portfolio-1col.html">Portfolio 1 Column</a></li>
										<li class="menu-item"><a href="portfolio-2col.html">Portfolio 2 Columns</a></li>
										<li class="menu-item"><a href="portfolio-3col.html">Portfolio 3 Columns</a></li>
										<li class="menu-item"><a href="portfolio-4col.html">Portfolio 4 Columns</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="portfolio-full-width.html">Full-width page</a></li>
								<li class="menu-item"><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>
								<li class="menu-item"><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>
								<li class="menu-item"><a href="portfolio-double-sidebars.html">Double Sidebars</a></li>
								<li class="menu-item"><a href="portfolio-gallery.html">Gallery</a></li>
								<li class="menu-item"><a href="portfolio-gallery-sidebar.html">Gallery + Sidebar</a></li>
							</ul>
						</li>-->
					<li <? if ($page === "blog") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="blog-group.php">Blog</a></li>

					<li <? if ($page === "contacto") { ?>class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item" <? } else { ?>class="menu-item" <? } ?>><a href="page-contact.php">Contacto</a></li>
					<li class="menu-itemmenu-item-has-children"><a href="#">Descargables Gratuitos</a>
						<ul class="sub-menu">
							<li class="menu-item"><a href="https://tinyurl.com/yry722zr" target="_blank">Descarga tu Emocionario</a></li>
							<li class="menu-item"><a href="https://tinyurl.com/y6yfph9n" target="_blank">Descarga Libro para Colorear</a></li>
							<li class="menu-item"><a href="https://tinyurl.com/2p86yfn3" target="_blank">Descarga El Juego del Hipopótamo</a></li>
						</ul>
					</li>
					<li class="menu-item"><a href="https://www.canva.com/design/DAFLeEZSXdM/IWQwvs2uXY1YsmR0a8RF6g/view?website#2" target="_blank">Guía de Alimentación para Bebés</a></li>
					<li class="menu-item"><a href="https://www.canva.com/design/DAFI9cwYzjE/r1itSTtZMOF7hNZ2VhYs0A/view?website#2:conoce-a-la-instructora" target="_blank">Yoga para Niños</a></li>

					<!--<li class="menu-item"><a href="https://www.memeymuma.com/kit-cumple.pdf" target="_blank">Descarga tu Kit de Cumpleaños</a></li>-->
				</ul>
			</nav>
			<!-- #kids_main_nav -->
		</div>
		<!--/ .l-page-width-->
	</header>