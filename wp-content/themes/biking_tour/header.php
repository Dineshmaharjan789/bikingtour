<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biking_tour
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'biking_tour' ); ?></a>

	<?php /*
	<header id="masthead" class="site-header">
		<!-- biking-tour-header-logo-section -->
		<section class="biking_tour_header_logo_wrap">
			<div class="container">
				<div class="row">
					 <div class="col-md-6">
					 	<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$biking_tour_description = get_bloginfo( 'description', 'display' );
							if ( $biking_tour_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $biking_tour_description; /* WPCS: xss ok. */ /* ?></p>
							<?php  endif; /* ?>
						</div><!-- .site-branding -->
					 </div>
					 <div class="col-md-1">
					 	<a href="#"><i class="ion ion-logo-facebook"></i></a>
					 	<a href="#"><i class="ion ion-logo-twitter"></i></a>
					 	<a href="#"><i class="ion ion-logo-linkedin"></i></a>
					 </div>
					 <div class="col-md-5">
					 	<nav id="site-navigation" class="main-navigation">
						 	<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'top-menu',
								) );
								?>
						</nav>
						<?php _e('CALL ONE OF OUR TRAVEL EXPERTS:','biking_tour'); ?>
						<h2><?php _e('(508) 545-1864','biking_tour'); ?></h2>
					 </div>
				</div>
			</div>
		</section>
		 
		<!-- biking-tour-header-menu-section -->
		<section class="biking_tour_header_menu_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'biking_tour' ); ?></button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</section>

	</header><!-- #masthead --> */ ?>

	<div id="content" class="site-content">
