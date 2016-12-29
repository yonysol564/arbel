<?php  
    $main_banner     = '';
    $page_banner     = get_field('page_banner');
    $banner_title    = get_field('banner_title');
    $default_banner  = get_field('default_banner','option');
    if ($page_banner) {
        $main_banner = $page_banner;
    }else{
        $main_banner = $default_banner;
    }
?>
<div class="page_banner" style="background-image: url(<?php echo $main_banner['url']; ?>);">
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
