<?php get_header(); ?>
    <!-- Content -->


    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php echo get_breadcrumbs();?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-ewents-info">
            <div class="container-fluid wraper">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title();?></h3>
                         <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                               <?php ale_part('postfull');?>
                         <?php endwhile; else:?>
                               <?php ale_part('notfound');?>
                               <?php endif; ?>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="btn-green">Розклад Програми</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="btn-red-light">Реєструватись</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="data-ewents-content">
                            <p class=""><?php echo get_post_meta($post->ID, 'date', true);?></p>
                            <p class=""><?php echo get_post_meta($post->ID, 'time', true);?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="ewents-info-box">
                                <div class="ewents-info-img">

                                    <?php $attachment_id = get_post_meta($post->ID, 'uploader_custom',true);
                                    $attributes = wp_get_attachment_image_src( $attachment_id, array(299,291) );
                                    $default = get_stylesheet_directory_uri() . '/img/no-image.png';
                                    if (!empty($attachment_id)) {
                                        echo '<img src="' . $attributes[0] . '" width="' . $attributes[1] . '" height="' . $attributes[2] . '" alt="" />';
                                    } else {
                                        echo '<img src="' . $default. '"  alt="" />';

                                    }?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="ewents-info-box">
                                <div class="ewents-info-img">

                                    <?php $attachment_id = get_post_meta($post->ID, 'uploader_custom1',true);
                                    $attributes = wp_get_attachment_image_src( $attachment_id, array(299,291) );
                                    $default = get_stylesheet_directory_uri() . '/img/no-image.png';
                                    if (!empty($attachment_id)) {
                                        echo '<img src="' . $attributes[0] . '" width="' . $attributes[1] . '" height="' . $attributes[2] . '" alt="" />';
                                    } else {
                                        echo '<img src="' . $default. '"  alt="" />';

                                    }?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="ewents-info-box">
                                <div class="ewents-info-img">

                                    <?php $attachment_id = get_post_meta($post->ID, 'uploader_custom2',true);
                                    $attributes = wp_get_attachment_image_src( $attachment_id, array(299,291) );
                                    $default = get_stylesheet_directory_uri() . '/img/no-image.png';
                                    if (!empty($attachment_id)) {
                                        echo '<img src="' . $attributes[0] . '" width="' . $attributes[1] . '" height="' . $attributes[2] . '" alt="" />';
                                    } else {
                                        echo '<img src="' . $default. '"  alt="" />';

                                    }?>

                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>
                </div>
        </section>
    </div><!-- /.main -->
<?php get_footer();?>
