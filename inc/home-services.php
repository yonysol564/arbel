<?php 
	$video_title = get_field('video_title','option');
	$youtube_id = get_field('youtube_id','option');
	global $services_to_show;
?>

<?php if ($youtube_id) { ?>
	<div class="play_div">
		<a class="open_video popup-youtube" href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" title="">
			<?php echo $video_title; ?>
			<img src="<?php echo THEME_DIR; ?>/images/playimg.png" alt="Play">
		</a>
	</div>
<?php } ?>
<div class="row cat_row">
	<?php foreach ($services_to_show as $service) { 
		$url = wp_get_attachment_url( get_post_thumbnail_id($service->ID) );
	?>
		<div class="large-3 medium-6 small-12 column no_pad">
			<a href="<?php get_permalink($service->ID); ?>" title="">
				<div class="cat_img" style="background-image: url( <?php echo $url; ?> )">
					<div class="abs_div">
						<div class="inner_div">
							<div class="title_div">
								<?php echo get_the_title($service->ID); ?>
							</div>
						</div>	
					</div>
				</div>
			</a>
		</div>
	<?php } ?>
</div>
