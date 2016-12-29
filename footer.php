<?php 
	$facebook_img 		= get_field('footer_face_img','option');
	$whatsup_img		= get_field('footer_whatsup_img','option');
	$youtube_img		= get_field('footer_youtube_img','option');
	$gplus_img 			= get_field('footer_gplus_img','option');

	$facebook_link = get_field('facebook_link', 'option');
	$whatsup_link = get_field('whatsup_link', 'option');
	$googleplus_link = get_field('googleplus_link', 'option');
	$youtube_link = get_field('youtube_link', 'option');

	$phone_number 	= get_field('phone_number', 'option');
	$phone_img 		= get_field('phone_img', 'option');
	$phone_text 	= get_field('phone_text', 'option');

	$footer_copy 	= get_field('footer_copy', 'option');
	$footer_extra 	= get_field('footer_extra', 'option');
	$footer_extra_link = get_field('footer_extra_link', 'option');	
?>
<footer>
	<div class="top_footer">	
		<div class="row">
			<div class="large-12 column">
				<div class="footer_menu">
	            	<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'footer_menu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 column">
				<div class="wrap_social_footer">
					<?php if ($youtube_img) { ?>
						<a class="social_img" target="_blank" href="<?php echo $youtube_link; ?>">
							<img src="<?php echo $youtube_img['url']; ?>" alt="youtube">
						</a>
					<?php } ?>
					<?php if ($whatsup_img) { ?>
						<a class="social_img" target="_blank" href="<?php echo $whatsup_link; ?>">
							<img src="<?php echo $whatsup_img['url']; ?>" alt="whatsup">
						</a>								
					<?php } ?>
					<?php if ($gplus_img) { ?>
						<a class="social_img" target="_blank" href="<?php echo $googleplus_link; ?>">
							<img src="<?php echo $gplus_img['url']; ?>" alt="googleplus">
						</a>							
					<?php } ?>
					<?php if ($facebook_img) { ?>
						<a class="social_img" target="_blank" href="<?php echo $facebook_link; ?>">
							<img src="<?php echo $facebook_img['url']; ?>" alt="facebook">
						</a>								
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 column">
				<div class="footer_wrap_phone">
					<a class="phone_div" href="tel:<?php echo $phone_number; ?>">
						<div class="wrap_phone clearfix">	
							<div class="wrap_img_phone">
								<img src="<?php echo THEME_DIR; ?>/images/phone_img.png" alt="phone">
							</div>
							<div class="wrap_text_phone">							
								<span class="number">	
									<?php echo $phone_number; ?>
								</span>
								<span class="col_now">
									<?php echo $phone_text;?>
								</span>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom_footer">	
		<div class="row">

			<div class="large-6 column footer_copy">
				<?php echo $footer_copy; ?>
			</div>

			<div class="large-6 column footer_extra">
				<a href="<?php echo $footer_extra_link; ?>" taret="_blank">
					<?php echo $footer_extra; ?>
					<img src="<?php echo THEME_DIR; ?>/images/footer_logo.png" alt="Extra">
				</a>
			</div>
		</div>
	</div>

</footer>
	</div>
</div> <!-- end wrapper -->
<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581596cf85ebe836"></script> 
</body>
</html>
