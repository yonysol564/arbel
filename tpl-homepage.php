<?php
/* Template Name: Home */
	get_header();
		$home_main_title = get_field('home_main_title');
		$home_slider 	 = get_field('home_slider');
		$gallery_rep 	 = get_field('gallery_rep');
		$services_to_show = get_field('services_to_show');
	?>
	<div class="home_wrap_slider">
		<div class="home_slider">
			<?php if ($home_slider) {
				foreach ($home_slider as $slider) { ?>
					<div class="inner_home_banner" style="background-image: url( <?php echo $slider['home_slider_img']['url']; ?> )">
						
					</div>	
				<?php }
			} ?>
		</div>
		<div class="abs_home_wave"></div>
	</div>
	<?php while ( have_posts() ) : the_post(); ?>

	<section class="main_sec">

		<div class="row">
			<div class="large-12 column'">	
				<h1><?php echo $home_main_title; ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="large-12 column">	
				<div class="wrap_con">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<?php get_template_part('inc/home','services'); ?>
		
		<?php //get_template_part('inc/services','custom'); ?>

		<?php get_template_part('inc/customers','logos'); ?>

	</section>

	<?php if ($gallery_rep) { ?>
		<section class="boxes_sec clearfix">
			<div class="box_container clearfix">
				<div class="popup-gallery gallery home_gallery">
					<?php foreach ($gallery_rep as $item) { ?>
						<div class="box_col" style="background-image: url(<?php echo $item['gallery_img']['url']; ?>);">
							<a href="<?php echo $item['gallery_img']['url']; ?>" title="">	
								<div class="abs_div desktop_only">
									<div class="wrap_text">
										<div class="inner_text">
											<div class="top_div">
												<?php echo $item['gallery_title']; ?>
											</div>
											<div class="bottom_div">
												<?php echo $item['gallery_desc']; ?>
											</div>
											<div>
												<img src="<?php echo THEME_DIR; ?>/images/caret.png" alt="caret">
											</div>
										</div>
									</div>
								</div>
								<div class="abs_div_mobile mobile_only">
									<div class="wrap_text">
										<div class="inner_text">
											<div class="top_div">
												<?php echo $item['gallery_title']; ?>
											</div>
										<!-- 	<div class="bottom_div">
												<?php // echo $item['gallery_desc']; ?>
											</div> -->
										<!-- 	<div>
												<img src="<?php // echo THEME_DIR; ?>/images/caret.png" alt="caret">
											</div> -->
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>					
			</div>
		</section>	
	<?php } ?>
	
	<div class="home_wrap">
		<?php get_template_part('inc/contact', 'form'); ?>
	</div>
	
	<?php endwhile; // End of the loop.?>

<?php
get_sidebar();
get_footer();
?>
