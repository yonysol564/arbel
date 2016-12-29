<?php 
	$video_title = get_field('video_title','option');
	$youtube_id = get_field('youtube_id','option');
    $services = new WP_Query( 
        array( 
            'posts_per_page' => 4, 
            'post_type' => 'service',
        )
    ); 
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
	<?php $cnt = 0; ?>
	<?php while ( $services->have_posts() ) : $services->the_post(); 
	    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
		<div class="large-3 medium-6 small-12 column no_pad">
			<a href="<?php the_permalink(); ?>" title="">
				<div class="cat_img" style="background-image: url( <?php echo $url; ?> )">
					<div class="abs_div">
						<div class="inner_div">
							<div class="title_div">
								<?php the_title(); ?>
							</div>
						</div>	
					</div>
				</div>
			</a>
		</div>
	<?php $cnt++; endwhile; // End of the loop.?>
</div>
