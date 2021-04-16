<?php
get_header();
?>

<?php 
    while(have_posts()){
    the_post();
}
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
                    <div id="primary" class="col-xs-12 col-sm-8 col-md-6">
									<h1>
                                    <?php
                                    the_title()
                                    ?>
                                    </h1>
									<p>
                                    <?php
                                    the_content()
                                    ?>
                                    </p>
								</div>
                                <aside id="secondary" class="col-xs-12 col-sm-4 col-md-6">
                                <?php
							    the_post_thumbnail();
							    ?>
                                </aside>
						</div>
					</div>
				</div>
			</section>
		</main>

	


<?php
get_footer();
?>