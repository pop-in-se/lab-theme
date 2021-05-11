<?php //hämtar header 
get_header()
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>

<?php //Loopar över inläggen 
if (have_posts()) :  while (have_posts()) : the_post(); ?>

							<article>
							
							<img src="<?php //Hämtar utvald bild i inlägget 
										the_post_thumbnail_url();?>">
							
							<h2 class="title">
							 
							<a href="<?php //Länkar till inlägget
									the_permalink();?>">
							 
                                    <?php //Inläggets titel
                                    the_title();
                                    ?>
									</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 
										<?php //Visar datum 
										the_time('j F, Y');
										?> 
									</li>
									<li>
										<i class="fa fa-user"></i> 
										<?php //Visar författare 
										 the_author();
										 ?> 
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">
										
                                        <?php //Visar kategorier 
                                            the_category(',' . ' ');
                                        ?></a>
									</li>
								</ul>
								<p>
								
                                <?php //Visa utdrag av innehållet i inlägget
                                the_excerpt();
                                ?>
                                </p>
							</article>
							
							<?php //Avslutar loopen som kollar om det finns inlägg
							endwhile; else : endif; 
							?>

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
									<?php //Hämtar sökformuläret searchform.php 
									get_search_form();
									?>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
														
										<?php //Hämtar huvudmenyn 
        					$bloggmenyarray = [
								'theme_location' => 'bloggmeny',
								'container'       => false,
								'items_wrap'      => '%3$s',
								'depth'           => 0,
        					];
        					wp_nav_menu( $bloggmenyarray );
							?>
										</ul>
									</li>
									<li>
										
										<ul>
											<li>
											<?php //Hämtar sidebarwidget
							dynamic_sidebar('bloggsidebar');
							?>		
											</li>
										</ul>
									</li>
									
								</ul>
							</div>
						</aside>

						
					</div>
				</div>
			</section>
		</main>



<?php //Hämtar footer 
get_footer()
?>
