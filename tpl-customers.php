<?php
    /* Template Name: Customers */
    get_header();
    $page_banner  = get_field('page_banner');
    $customers_rep  = get_field('customers_rep');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page','banner'); ?>
    <div class="customer_sec">
        <div class="sec_inner">
            <div class="row">
                <div class="large-12 column">
                    <h2>
                        <?php echo get_field('customers_title'); ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="large-12 column">
                    <div class="wrap_con">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php foreach($customers_rep as $cust) { 
                    $hover_state = '';
                    if ($cust['customers_rep_title'] && $cust['customers_rep_con']) {
                        $hover_state = 'hover_state_pos';
                    }else{
                        $hover_state = '';
                    }
                ?>
                    <div class="large-4 medium-6 column cust_col end <?php echo $hover_state; ?>">
                        <?php if ($cust['customers_rep_link']){ ?> 
                            <a href="<?php echo $cust['customers_rep_link']; ?>" target="_blank">  
                        <?php } else { ?>
                            <a href="#" class="prevent_a">
                        <?php } ?>
                            <div class="customer_box">

                                <div class="wrap_img">
                                    <img src="<?php echo $cust['customers_rep_img']['url']; ?>" alt="customer">
                                </div>

                                <?php if ($cust['customers_rep_title']) { ?>
                                    <div class="hover_state">
                                        <div>
                                            <img src="<?php echo THEME_DIR; ?>/images/quote.png" alt="quote">
                                        </div>
                                        <h4>
                                            <?php echo $cust['customers_rep_title']; ?>
                                        </h4>
                                        <div>
                                            <?php echo $cust['customers_rep_con']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="wave">
            </div>
        </div>
        <div class="customers_wrap">
            <?php get_template_part('inc/contact', 'form'); ?>
        </div>
    </div>
<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
