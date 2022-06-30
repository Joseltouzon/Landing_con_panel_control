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

<body data-type-of-widget="2" class="page secondary-page t-pattern-1">
	<!-- HEADER BEGIN -->
	<?include_once 'includes/header.php';?>
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
								<main class="blog">
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day">3</span>
												<span class="month">Jan.2015</span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="Image Post" href="pic/HappyFeet_1st4.jpg"><img class="pic" src="pic/370x370-img-1.jpg" alt="Image Post" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="#">Image Post</a>
												</div>
												<!--/ post-title-->
												<p><b>Lorem ipsum dolor sit amet.</b></p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor in e magn aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
												<p> </p>
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog-single-post.html" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Category:</span><a class="link" href="#" title="View all posts in">Image</a></p>
											</div>
											<!--/ post-cats -->
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a> </p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day">2</span>
												<span class="month">Jan.2015</span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure>
													<a class="prettyPhoto kids_picture" title="Image Post" href="pic/LegoMovie_3rd4.jpg"><img class="pic" src="pic/370x370-img-2.jpg" alt="Image Post" /></a>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="#">Image Post</a>
												</div>
												<!--/ post-title-->
												<p><b>Lorem ipsum dolor sit amet.</b></p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor in e magn aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
												<p> </p>
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog-single-post.html" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Category:</span><a class="link" href="#" title="View all posts in">Image</a></p>
											</div>
											<!--/ post-cats -->
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a> </p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day">1</span>
												<span class="month">Jan.2015</span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="content-wrapper alignleft">
												<figure style="width: 370px; height: 208.125px">
													<iframe width="560" height="315" src="http://www.youtube.com/embed/HwXbtZXjbVE" frameborder="0" allowfullscreen></iframe>
												</figure>
											</div>
											<!--/ post-thumb-->
											<div class="entry">
												<div class="post-title">
													<a href="#">Video blog post</a>
												</div>
												<!--/ post-title-->
												<p><b>Lorem ipsum dolor sit amet.</b></p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor in e magn aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  </p>
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog-single-post.html" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Category:</span><a class="link" href="#" title="View all posts in">Image</a>, <a class="link" href="#" title="View all posts in">test</a>, <a class="link" href="#" title="View all posts in">Video</a></p>
											</div>
											<!--/ post-cats -->
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a>, <a href='#' title='Tag' class='link'>Post</a> </p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day">1</span>
												<span class="month">Jan.2015</span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="entry">
												<div class="post-title">
													<a href="#">Just a post</a>
												</div>
												<!--/ post-title-->
												<p><b>Lorem ipsum dolor sit amet.</b></p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor in e magn aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  </p>
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog-single-post.html" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Category:</span><a class="link" href="#" title="View all posts in">Text</a></p>
											</div>
											<!--/ post-cats -->
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a> </p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
									<article class="post-item">
										<div class="post-meta">
											<div class="post-date">
												<span class="day">1</span>
												<span class="month">Dec.2014</span>
											</div>
											<!--/ post-date-->
										</div>
										<!--/ post-meta-->
										<div class="post-entry">
											<div class="entry">
												<div class="post-title">
													<a href="#">Text blog post</a>
												</div>
												<!--/ post-title-->
												<p><b>Lorem ipsum dolor sit amet.</b></p>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor in e magn aliquam erat volutpat.</p>
												<p><i>Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup ex ea commodo consequat. Duis autem vel eum iriure dolor</i></p>
											</div>
											<!--/ entry-->
										</div>
										<!--/ post-entry -->
										<div class="post-footer">
											<span class="l-float-right"><a href="blog-single-post.html" class="more-link cws_button"> Read more </a></span>
											<div class="post_cats">
												<p><span>Category:</span><a class="link" href="#" title="View all posts in">Text</a>, <a class="link" href="#" title="View all posts in">Uncategorized</a></p>
											</div>
											<!--/ post-cats -->
											<div class="post_tags">
												<p><span>Tags:</span>
													<a href='#' title='Tag' class='link'>Blog</a>, <a href='#' title='Tag' class='link'>Post</a> </p>
											</div>
											<!--/ post-tags -->
											<div class="kids_clear"></div>
										</div>
										<!--/ post-footer-->
									</article>
									<!--/ post-item-->
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
	<?include_once 'includes/footer.php';?>
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
