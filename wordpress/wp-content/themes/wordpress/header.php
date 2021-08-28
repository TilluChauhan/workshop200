<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>workshop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
	<?PHP
if (have_posts()) {
											while (have_posts()) {
												the_post();
										?>
	<section class="pol">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="cento-header iop">
							<div class="logo">
								<a class="hamburger" aria-label="Menu" href="https://www.collectors-xchange.com/#">
									<span class="wsite-logo">										
											<div Class="qw">
												<?php the_post_thumbnail(); ?>
											</div>
									</span>
								</a>
							</div>		
							</div>
											</div>
		</div>
	</section>		
	<section class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">	
						<div class="nav-wrap nhk">						
								<div class="lp asd">
									<?php
											$arr = array(
												'menu_class' => '',
												'theme_location' => 'home menus',
												'container' => '',
												'container_class' => '',
											);
											wp_nav_menu($arr);
									?>
								</div>
						</div><!-- end .nav-wrap -->
					</div>
			</div>
		</div>
		</div>
	</section>
	<?php
										}
									}
							?>