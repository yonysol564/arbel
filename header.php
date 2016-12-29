<?php
	$logo = get_field('main_logo','option');

	$facebook_img = get_field('facebook_img', 'option');
	$whatsup_img = get_field('whatsup_img', 'option');
	$googleplus_img = get_field('googleplus_img', 'option');
	$youtube_img = get_field('youtube_img', 'option');
	
	$facebook_link = get_field('facebook_link', 'option');
	$whatsup_link = get_field('whatsup_link', 'option');
	$googleplus_link = get_field('googleplus_link', 'option');
	$youtube_link = get_field('youtube_link', 'option');

	$phone_number = get_field('phone_number', 'option');
	$phone_img = get_field('phone_img', 'option');
	$phone_text = get_field('phone_text', 'option');

	$header_scripts = get_field('header_scripts', 'option');

	
?>
<!doctype html>
<!--[if lt IE 10]><html lang="he" class="lt10"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<title><?php wp_title(); ?></title>
<!--[if lt IE 10]>
	<script type='text/javascript'>
		$(document).ready(function(){
			$.get('browsers.html' , function(data){
				$('body').html(data);
			});
		});
	</script>
<![endif]-->

<?php if ($header_scripts) {
	echo $header_scripts;
} ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
    var domainurl = '<?php echo THEME_DIR; ?>';
</script>
<div class="wrapper">
	<header>
		<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
			<div class="logo_wrap logo_wrap_mobile mobile_only">
		  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
					<div>
						<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
					</div>
				</a>
			</div>
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="inner_phone mobile_only">
				<a class="phone_div" href="tel:<?php echo $phone_number; ?>">
					<div class="wrap_phone clearfix">	
						<div class="wrap_img_phone">
							<img src="<?php echo $phone_img['url']; ?>" alt="phone">
						</div>
						<div class="wrap_text_phone desktop_only">							
							<span>	
								<?php echo $phone_number; ?>
							</span>
							<span>
								<?php echo $phone_text;?>
							</span>
						</div>
					</div>
				</a>
			</div>
			<div class="title-bar-title"></div>
		</div>
		<div class="top-bar menu_div" id="example-menu">
	  		<div class="row header_row">

				<div class="large-3 medium-3 small-2 column logo_col_desk"> 
					<div class="logo_wrap desktop_only">
				  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
							<div>
								<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
							</div>
						</a>
					</div>
				</div>

				<div class="large-6 medium-9 small-12 column menu_col">
					<nav>	
			    		<?php
				           	wp_nav_menu( array(
				                  'theme_location'    => 'top_menu',
				                  'menu_class'        => '',
				                  'container'         => '',
				                  'container_class'   => '',
				                  )
				            );
				        ?>
					</nav>
				</div>


				<div class="large-3 medium-3 small-12 column socials_col"> 
					<div class="socials_wrap desktop_only">

						<div class="inner_phone">
							<a class="phone_div" href="tel:<?php echo $phone_number; ?>">
								<div class="wrap_phone clearfix">	
									<div class="wrap_img_phone">
										<img src="<?php echo $phone_img['url']; ?>" alt="phone">
									</div>
									<div class="wrap_text_phone">							
										<span>	
											<?php echo $phone_number; ?>
										</span>
										<span>
											<?php echo $phone_text;?>
										</span>
									</div>
								</div>
							</a>
						</div>

						<div class="inner_socials">
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
							<?php if ($googleplus_img) { ?>
								<a class="social_img" target="_blank" href="<?php echo $googleplus_link; ?>">
									<img src="<?php echo $googleplus_img['url']; ?>" alt="googleplus">
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

			</div>
			<div class="mobile_only">
				<div class="inner_socials">
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
					<?php if ($googleplus_img) { ?>
						<a class="social_img" target="_blank" href="<?php echo $googleplus_link; ?>">
							<img src="<?php echo $googleplus_img['url']; ?>" alt="googleplus">
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

	</header>
	<div class="inner_wrapper">




