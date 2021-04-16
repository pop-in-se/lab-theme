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
							<?php
							the_post_thumbnail();
							?>
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
										<i class="fa fa-tag"></i><?php the_category() ?>
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
								the_posts_pagination()
								?>
							</nav>
						</div>

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li class="page_item current_page_item">
											
									<?php
									dynamic_sidebar('bloggsidebar');
									?>
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
