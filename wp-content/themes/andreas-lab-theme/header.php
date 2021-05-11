<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(). '/assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri(). '/assets/css/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri(). '/style.css' ?>">
	<script src="<?= get_template_directory_uri(). '/assets/js/jquery.js' ?>"></script>

    <?= //Lägger in wp-adminbaren i toppen på sidan
    wp_head();
    ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="http://localhost:3500/lab-theme/">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
							<?php //Hämtar searchform.php 
							get_search_form()
							?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php
				get_search_form();
				?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							
							<?php //Hämtar huvudmenyn 
        					$menyarray = [
            				'theme_location' => 'huvudmeny',
        					];
        					wp_nav_menu( $menyarray );
   							?>
							
						</ul>
					</div>
				</div>
			</div>
		</nav>