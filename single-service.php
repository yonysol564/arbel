<?php
    get_header();
    $object = get_queried_object();
    $single_content = get_field('single_content');
    $all_you_need     = get_field('all_you_need','option');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page','banner'); ?>
    <div class="single_sec">
        <div class="sec_inner">
            <div class="row">
                <div class="large-12 column">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
            </div>
            <?php if ($single_content) { 
                foreach ($single_content as $cont) { ?>
                    <div class="row">
                        <div class="large-12 column">
                          <h3><?php echo $cont['single_content_title']; ?></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="large-12 column">
                          <div class="single_desc">
                              <?php echo $cont['single_content_desc']; ?>
                          </div>
                        </div>
                    </div>

                    <div class="row images_row">
                        <?php foreach ($cont['single_content_images'] as $images) { ?>
                            <div class="large-4 column col_single_img">
                              <div class="single_img">
                                 <img src="<?php echo $images['single_con_img']['url']; ?> " title="" alt="">
                              </div>
                            </div>
                        <?php } ?>

                    </div>
                <?php } 
           } ?>

            <div class="row">
                <div class="large-12 column">
                    <a class="all_you_need" href="#" title="">
                        <div class="bag_title">
                            <?php echo $all_you_need; ?>
                        </div>
                        <img src="<?php echo THEME_DIR; ?>/images/caretbig.png" alt="caret">
                    </a>
                </div>
            </div>
            <div class="wave">
            </div>
        </div>
        <div class="wrap_single">
            <?php get_template_part('inc/contact', 'form'); ?>
        </div>
    </div>
<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
