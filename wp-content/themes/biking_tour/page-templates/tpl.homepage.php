<?php
/**
 * Template Name: homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biking_tour
 */

get_header();
while(have_posts()): the_post();
?>

<!-- biking-tour-banner-section -->
<section class="biking_tour_banner_wrap" style="background-image: url(<?php the_field('hompage_banner_bk_image'); ?>);">

	<?php do_action('biking_tour_header_sec_fnc','biking_tour'); ?>

	<!-- biking-tour-homepage-header-section -->
	<section class="biking_tour_homepage_header_wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<figure>
						<img src="<?php the_field('hompage_banner_front_image') ?>">
					</figure>
					<h2><?php the_field('hompage_banner_main_title'); ?></h2>
					<?php the_field('hompage_banner_text'); ?>
					<a href="#">BOOK THE TRIAL</a>
				</div>
			</div>
		</div>
	</section>

</section>

<!-- biking-tour-homepage-guided-tour-section -->
<section class="biking_tour_homepage_guided_tour_wrap"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_field('guided_tour_section_date'); ?>
				<h2><?php the_field('guided_tour_section_title'); ?></h2>
				<?php the_field('guided_tour_section_content'); ?>
			</div>
			<div class="col-md-6">
				<img src="<?php the_field('guided_tour_section_image'); ?>">
			</div>	  
		</div>
	</div>
</section>

<!-- biking-tour-homepage-holiday-packages-section -->
<section class="biking_tour_homepage_holiday_packages_wrap"> 
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?php the_field('holiday_packages_main_title'); ?></h2>
				<?php the_field('holiday_packages_top_text'); ?>
			</div>  
		</div>
		<div class="row">
			<?php $biking_posts = new WP_Query(array( 'post_type' => ' ' , 'posts_per_page' =>  '6' ));
			if($biking_posts -> have_posts()): 
				while($biking_posts -> have_posts()): $biking_posts -> the_post(); ?>
					<div class="col-md-4">
						<figure>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url('homepage_holiday_packages_image'); ?>"></a>
						</figure>
						<?php the_category(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 <?php the_field('packages_days'); ?> | <?php the_field('packages_night'); ?>
					</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="#">BOOK THE TRIAL</a>
			</div>
		</div>
	</div>
</section>


<!-- biking-tour-homepage-enquiry-section -->
<section class="biking_tour_homepage_enquiry_wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-right">
				<h2><?php the_field('homepage_contact_section_title'); ?></h2>
				<?php the_field('homepage_contact_section_content'); ?>
			</div>
			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="88" title="Homepage enquiry form"]'); ?>
			</div>
		</div>
	</div>
</section>


<!-- biking-tour-homepage-blog-listing-section -->
<section class="biking_tour_homepage_blog_listing_wrap">
	<div class="container">
		<div class="row">
			<?php 
			$biking_blogs = new WP_Query(array( 'post_type' => 'blog' , 'posts_per_page' =>  '4' ));
			if($biking_blogs -> have_posts()): 
				while($biking_blogs -> have_posts()): $biking_blogs -> the_post(); ?>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5">	
								<figure>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php the_post_thumbnail_url(); ?>"></a>
								</figure>
							</div>
							<div class="col-md-7">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						 		<?php the_field('blog_no_of_nights'); ?> | <?php the_field('blog_no_of_days'); ?><br>
						 		<?php echo wp_trim_words(get_the_content(),25); ?>
						 		<a href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</div>
					</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
			<h2><a href="#">Read all blogs</a></h2>
		</div>
	</div>
</section>

<!-- biking-tour-homepage-newsletter-section -->
<section class="biking_tour_homepage_newsletter_wrap"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Subscribe to Newsletter</h1>
				<p>Enter your email address for our mailing list to keep yourself updated.</p>
			</div>
			<div class="col-md-6">
				<?php echo do_shortcode('[newsletter_form][newsletter_field name="email" label="" placeholder="example@example.com"]<button class="tnp-field"><i class="tnp-button ion ion-md-paper-plane"></i></button>[/newsletter_form]'); ?>
			</div>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer(); 
