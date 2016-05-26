<?php get_header(); ?>
    <!-- Content -->
<?php /* ?>
    <div class="blog-center-align">

        <!-- Blog Caption -->
        <div class="blog-caption">
            <div class="blogtitle"><?php _e('Blog Posts','aletheme'); ?></div>
        </div>

        <!-- Blog Line -->
        <div class="blog-line"></div>

        <!-- Filters Here -->
        <ul class="blog-filter-line">
            <li><?php _e('Filter By','aletheme'); ?>:</li>
            <li>
                <a class="filter-caption"><p><?php _e('Author','aletheme'); ?></p><span></span></a>
                <ul>

                    <?php
                    $args = array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => null,
                        'optioncount'   => false,
                        'exclude_admin' => false,
                        'show_fullname' => false,
                        'hide_empty'    => true,
                        'echo'          => true,
                        'style'         => 'list',
                        'html'          => true );

                    wp_list_authors($args); ?>
                </ul>

            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Category','aletheme'); ?></p><span></span></a>
                <ul>
                    <?php
                    $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 1,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => '',
                        'show_option_none'   => __('No categories','aletheme'),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                    );
                    wp_list_categories($args); ?>
                </ul>
            </li>

            <li>
                <a class="filter-caption"><p><?php _e('Tags','aletheme'); ?></p><span></span></a>
                <?php
                $tags = get_tags();
                $html = '<ul>';
                foreach ( $tags as $tag ) {
                    $tag_link = get_tag_link( $tag->term_id );

                    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                    $html .= "{$tag->name}</a></li>";
                }
                $html .= '</ul>';
                echo $html;
                ?>
            </li>

            <li class="search">
                <form role="search" method="get" id="searchform" action="<?php echo site_url()?>" >
                    <input type="search" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e('SEARCH', 'aletheme')?>" />
                    <button type="submit" id="searchsubmit"></button>
                </form>
            </li>
        </ul>

        <!-- Blog Content -->
        <div class="blog-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('postpreview' );?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <!-- Blog Nav  -->
        <div class="blog-nav">
            <span class="left"><?php echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?></span>
            <span class="right"><?php echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?></span>
            <div class="center"><?php _e('page','aletheme'); ?> <?php echo $paged; ?> <?php _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; ?></div>
        </div>

        <!-- Blog Nav -->
        <div class="blog-line"></div>

        <!-- Blog Footer  -->
        <div class="blog-footer">
            <?php ale_part('archives'); ?>
        </div>

    </div>
 <?php */ ?>

    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                
                <?php echo get_breadcrumbs(); ?>

            </div><!-- /.row -->
        </div>
        <section class="main-ewents">
            <div class="container-fluid wraper">
                <div class="row">
                    <div class="ewents-box-wrap">
                        <div class="ewents-box clearfix">
                            <div class="col-md-4 col-sm-4  pl-0">
                                <div class="ewents-img">
                                    <img src="img/ewents/ewent_1.jpg" alt="ewent-img">
                                    <div class="data-ewents">
                                        <div class="data-ewents-content">
                                            <p class="">Сб, 22 Грудня</p>
                                            <p class="">11:30 - 16:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="ewents-description">
                                    <h4><a href="#">готуючись до Різдва</a></h4>
                                    <p>20-22 грудня 2013 р. в Реколекційно-відпочинковому Центрі «Світлиця», працівники та викладачі Українського Католицького Університету мали змогу робити свої реколекції, готуючись до Різдва ГНІХ.</p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Зареєструватись
                                    </a><!-- /.btn-red-light -->

                                    <a href="#" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.ewents-box-wrap -->

                    <div class="ewents-box-wrap">
                        <div class="ewents-box clearfix">
                            <div class="col-md-4 col-sm-4 pl-0">
                                <div class="ewents-img">
                                    <img src="img/ewents/ewent_2.jpg" alt="ewent-img">
                                    <div class="data-ewents">
                                        <div class="data-ewents-content">
                                            <p class="">Сб, 22 Грудня</p>
                                            <p class="">11:30 - 16:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="ewents-description">
                                    <h4>підтримали учасників Львівського Євромайдану.</h4>
                                    <p>Третього грудня працівники Реколекційного Центру «Світлиця» приєдналися до діючої акції протесту України на майдані Львова.</p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Зареєструватись
                                    </a><!-- /.btn-red-light -->

                                    <a href="#" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.ewents-box-wrap -->

                    <div class="ewents-box-wrap">
                        <div class="ewents-box clearfix">
                            <div class="col-md-4 col-sm-4  pl-0">
                                <div class="ewents-img">
                                    <img src="img/ewents/ewent_3.jpg" alt="ewent-img">
                                    <div class="data-ewents">
                                        <div class="data-ewents-content">
                                            <p class="">Сб, 22 Грудня</p>
                                            <p class="">11:30 - 16:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="ewents-description">
                                    <h4>РАЗОМ З ПЕТРОМ  ЗА ІСУСОМ</h4>
                                    <p>6 – 8 грудня у Реколекційно – Відпочинковому Центрі «Світлиця» відбулась чергова формаційна зустріч «Відкрий двері Христові» для дітей зі священичих родин  Львівської архиєпархії .</p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Зареєструватись
                                    </a><!-- /.btn-red-light -->

                                    <a href="#" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.ewents-box-wrap -->


                    <div class="ewents-box-wrap">
                        <div class="ewents-box clearfix">
                            <div class="col-md-4 col-sm-4  pl-0">
                                <div class="ewents-img">
                                    <img src="img/ewents/ewent_4.jpg" alt="ewent-img">
                                    <div class="data-ewents">
                                        <div class="data-ewents-content">
                                            <p class="">Сб, 22 Грудня</p>
                                            <p class="">11:30 - 16:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="ewents-description">
                                    <h4>четверті спільні реколекції</h4>
                                    <p>11 – 15 листопада 2013 року в реколекційному центрі Львівської архиєпархії УГКЦ, що в Брюховичах біля Львова, відбулися четверті спільні реколекції для єпископів Української Греко-Католицької Церкви, Римо-Католицької Церкви в Україні та Мукачівської греко-католицької єпархії.</p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Зареєструватись
                                    </a><!-- /.btn-red-light -->

                                    <a href="#" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.ewents-box-wrap -->


                    <div class="ewents-box-wrap">
                        <div class="ewents-box clearfix">
                            <div class="col-md-4 col-sm-4  pl-0">
                                <div class="ewents-img">
                                    <img src="img/ewents/ewent_5.jpg" alt="ewent-img">
                                    <div class="data-ewents">
                                        <div class="data-ewents-content">
                                            <p class="">Сб, 22 Грудня</p>
                                            <p class="">11:30 - 16:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="ewents-description">
                                    <h4>реколекції для сестер Селезіянок</h4>
                                    <p>З 6 по 13 вересня у Реколекційно-відпочинковому Центрі «Світлиця» відбуваються реколекції для сестер Селезіянок з усієї Європи і близького Сходу.</p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Зареєструватись
                                    </a><!-- /.btn-red-light -->

                                    <a href="#" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.ewents-box-wrap -->

                </div><!-- /.row -->
            </div>
        </section>
    </div><!-- /.main -->

<?php get_footer(); ?>