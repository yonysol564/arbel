<?php
    get_header();

    $page_banner  = get_field('page_banner_archive','option');
    $banner_title  = get_field('banner_title_archive','option');
    $archive_tittle  = get_field('archive_page_tittle','option');
    $archive_page_content  = get_field('archive_page_content','option');
?>

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
    <div class="services_sec">
        <div class="sec_inner">
            <div class="row">
                <div class="large-12 column">
                    <h2>
                        <?php echo $archive_tittle; ?>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="large-12 column">
                    <div class="wrap_con clearfix">
                        <?php echo $archive_page_content; ?>
                    </div>
                </div>
            </div>
        
            <?php get_template_part('inc/services', 'cats'); ?>
            <div class="wave">
            </div>
        </div>
        <div class="services_wrap_logos">  
            <?php get_template_part('inc/customers', 'logos'); ?>
        </div>

    </div>


<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
