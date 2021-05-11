<?php 
get_header()
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>  <?php
                                the_title();
                                ?></h1>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

							<article>
							<img src="<?php the_post_thumbnail_url();?>">
							
							<h2 class="title">
                                <?php
                                the_title();
                                ?>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date() ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author() ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">
                                        <?php
                                            the_category(',' . ' ');
                                        ?></a>
									</li>
								</ul>
								<p>
                                <?php
                                the_content();
                                ?>
                                </p>

							</article>

							<?php endwhile; else : endif; ?>

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<?php
								the_posts_pagination();
								?>
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



<?php 
get_footer()
?>
