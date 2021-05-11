<?php //hämtar header
get_header();
?>

<?php //Loopar över posts 
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
                                    
                                    <?php //hämtar sidans titel
                                    the_title()
                                    ?>
                                    </h1>
									<p>
                                    
                                    <?php //hämtar sidans innehåll
                                    the_content()
                                    ?>
                                    </p>
								</div>
                                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                                <div class="side-menu">
                                    
                                        <?php //hämtar sidebar.php
                                        get_sidebar();
                                        ?>
                                    </aside>
</div>
						</div>
					</div>
				</div>
			</section>
		</main>

	


<?php //hämtar footer
get_footer();
?>