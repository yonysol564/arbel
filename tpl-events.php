<?php
    /* Template Name: Events */
    get_header();
    $events_title  = get_field('events_title');
    $bag_toyou     = get_field('bag_toyou','option');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page','banner'); ?>
    <div class="events_sec">
        <div class="row">
            <div class="large-12 column">
                <h2>
                    <?php echo $events_title; ?>
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

        <section class="boxes_sec clearfix">
            <div class="box_container clearfix">

                <?php 
                    $galeries = new WP_Query( 
                        array( 
                            'posts_per_page' => -1, 
                            'post_type' => 'gallery',
                        )
                    ); 
                    $group = 0;
                ?>
                <?php while ( $galeries->have_posts() ) : $galeries->the_post(); 
                    $group++;
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
                    $gallery_rep = get_field('gallery_rep');                 
                ?>
                    <div class="popup-gallery gallery box_col" style="background-image: url(<?php echo $url; ?>);">

                        <a href="#" class="gallery_trigger">  
                            <div class="abs_div desktop_only">
                                <div class="wrap_text">
                                    <div class="inner_text">
                                        <div class="top_div">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="bottom_div">
                                            <?php the_excerpt(); ?>
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
                                            <?php the_title(); ?>
                                        </div>
                                      <!--   <div>
                                            <img src="<?php //echo THEME_DIR; ?>/images/caret.png" alt="caret">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php if($gallery_rep): ?>
                            <div class="gallery_hidden" style="display:none;" data-gallery="<?php echo $group; ?>">
                                <?php foreach($gallery_rep as $image) : ?>
                                    <a href="<?php echo $image['gallery_rep_img']['url']; ?>"></a>
                                <?php endforeach; ?>
                            </div>                    
                        <?php endif; ?>  

                    </div>
                <?php endwhile; // End of the loop.?>
                <div class="clearfix"></div>

                <div class="end_gallery_bag">
                    <a class="bag_to_you" href="#" title="">
                        <div class="bag_title">
                            <?php echo $bag_toyou; ?>
                        </div>
                        <img src="<?php echo THEME_DIR; ?>/images/caretbig.png" alt="caret">
                    </a>
                </div>
                <div class="abs_events"></div>           
            </div>
        </section>  

    </div>
    <div class="events_wrap">
        <?php get_template_part('inc/contact', 'form'); ?>
    </div>

<?php endwhile; // End of the loop.?>

<div class="mfp-hide" id="gallery"></div>

<?php
get_sidebar();
get_footer();
?>
