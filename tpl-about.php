<?php
    /* Template Name: About */
    get_header();
    //$page_banner  = get_field('page_banner');
   // $banner_title  = get_field('banner_title');
    $about_title  = get_field('about_title');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page','banner'); ?>
    <div class="about_sec">
        <div class="row">
            <div class="large-12 column">
                <h2>
                    <?php echo $about_title; ?>
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
        
        <?php get_template_part('inc/services','custom'); ?>

        <?php get_template_part('inc/customers', 'logos'); ?>
    </div>
<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
