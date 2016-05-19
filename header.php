<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll">
	<section id="home" data-stellar-background-ratio="0.5">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<span class="hidden-xs home-text">Flexible. creative. responsive</span>
					
					<?php echo do_shortcode('[quick_home_slider]'); ?>
					
					<p class="scrollto"><a href="#about" class="btn btn-lg btn-dark">More Detail</a></p>
				</div>
			</div>
		</div>          
	</section>
        
	<section id="navigation">
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location' 	=> 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'menu_class' 		=> 'nav navbar-nav',
						'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
						'menu_id'			=> 'main-menu',
						'walker' 			=> new wp_bootstrap_navwalker()
					)
				); ?>
			</div>
		</div><!-- .navbar -->
	</section>