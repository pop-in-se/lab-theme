<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php
						dynamic_sidebar('omosssidebar')
						?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php
						dynamic_sidebar('kontaktaosssidebar')
						?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<?php
						dynamic_sidebar('socialmediasidebar')
						?>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

    <script src="<?= get_template_directory_uri(). '/assets/js/script.js' ?>"></script>

<?php 
wp_footer()
?>
</body>
</html>