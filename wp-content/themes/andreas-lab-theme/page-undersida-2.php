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
                    <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
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
                                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                                <div class="side-menu">
                                        <?php
                                        get_sidebar();
                                        ?>
                                    </aside>
</div>
						</div>
					</div>
				</div>
			</section>
		</main>

	


<?php
get_footer();
?>