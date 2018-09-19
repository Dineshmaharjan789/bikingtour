<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package biking_tour
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function biking_tour_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'biking_tour_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function biking_tour_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'biking_tour_pingback_header' );



// biking tour banner section
add_action('biking_tour_header_sec_fnc','biking_tour_header_sec');

function biking_tour_header_sec(){ ?>

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
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							endif;
							$biking_tour_description = get_bloginfo( 'description', 'display' );
							if ( $biking_tour_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $biking_tour_description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>
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
					<div class="col-md-10">
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
					<div class="col-md-2">
						<a href="#">LET'S PLAN YOUR TRIPS</a>
					</div>
				</div>
			</div>
		</section>

	</header><!-- #masthead -->
<?php }