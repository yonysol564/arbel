<?php 
	$home_contact_title  = get_field('home_contact_title', 'option');
	$home_contact_form  = get_field('home_contact_form', 'option');
?>
<section class="contact_sec">
	<?php if ($home_contact_title) { ?>
		<div class="row">
			<div class="large-12 column'">	
				<h2><?php echo $home_contact_title; ?></h2>
			</div>
		</div>
	<?php } ?>
	<?php if ($home_contact_form) { ?>
		<div class="row">
			<div class="large-12 column">
				<div class="wrap_form">
					<?php echo do_shortcode($home_contact_form); ?>
				</div>
			</div>
		</div>
	<?php } ?>
</section>