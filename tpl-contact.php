<?php
    /* Template Name: Contact */
    get_header();
    $page_banner  = get_field('page_banner');
    $banner_title  = get_field('banner_title');
    $contact_tittle  = get_field('contact_page_tittle');

    $map_icon = get_field('map_icon');
    $address_contact = get_field('address_contact');
    $phone_icon  = get_field('phone_icon');
    $phone_conpage = get_field('phone_conpage');
    $contact_forn_short  = get_field('contact_forn_short');

    $locations      = get_field('contact_map'); 

?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="page_banner" style="background-image: url(<?php echo $page_banner['url']; ?>);">
        <div class="row">
            <div class="large-12 column"> 
                <div class="wrap_title">     
                    <h1>
                        <?php if ($banner_title) {
                           echo $banner_title;
                        } else {
                             the_title();
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
        <?php get_template_part('inc/breadcrumbs'); ?>
    </div>
    <div class="page_contact_sec">
        <div class="row">
            <div class="large-12 column">
                <h2>
                    <?php echo $contact_tittle; ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="large-12 column">
                <div class="wrap_con clearfix">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="row form_row">
            <div class="large-12 column">
                <div class="wrap_address clearfix">
                    <div class="wrap_con_info clearfix">
                        <img src="<?php echo $map_icon['url']; ?>" title="" alt="address">
                        <span>
                            <?php echo $address_contact; ?>
                        </span>
                    </div>
                    <div class="wrap_con_info clearfix">
                        <img src="<?php echo $phone_icon['url'];?>" title="" alt="phone">
                        <span>
                            <a href="tel:<?php echo $phone_conpage; ?>"><?php echo $phone_conpage; ?></a>
                        </span>  
                    </div>
                </div>
            </div>
        </div>
        <div class="form_wraper">  
            <?php if ($contact_forn_short) { ?>
                <div class="row">
                    <div class="large-12 column">
                        <div class="wrap_form">
                            <?php echo do_shortcode($contact_forn_short); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="abs_cir"></div>
        </div>


        <?php if($locations): ?>
            <script>
                var locations = [ "<?php echo $locations['address']; ?>", <?php echo $locations['lat']; ?> , <?php echo $locations['lng']; ?> ];
            </script>
            <div class="map_div" id="contact_map">
                
            </div>
        <?php endif; ?>

    </div>
<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
