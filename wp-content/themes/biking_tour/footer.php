<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biking_tour
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<!-- biking-tour-footer-widget-one-section -->
		<section class="biking_tour_footer_widget_one_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php get_sidebar('sidebar-1'); ?>
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-1'); ?>
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-2'); ?>
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-3'); ?>
					</div>
				</div>
			</div>
		</section>

		<div class="site-info">
			<!-- biking-tour-footer-copyright-section -->
			<section class="biking_tour_footer_copyright_wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							ASSOCIATED WITH
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/associated.jpg">
						</div>
						<div class="col-md-4">
							WE ACCEPT
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/accept.jpg">
						</div>
						<div class="col-md-4">
							Designed & Developed by <a href="https://wdefinedweb.com/">Well Defined Web</a>
							© Copyright 2017 Druk Dorje Adventures
						</div>
					</div>
				</div>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
