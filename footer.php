    <!-- Footer -->

    <footer>
        <div class="container-fluid wraper">
            <div class="row">
                <div class="col-md-4">
                    <?php if(ale_get_option('footer_sitelogo')){ ?>
                        <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('footer_sitelogo'); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo home_url(); ?>" class="logo"></a>
                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <menu>
                        <input type="checkbox" class="menu-checkbox" id="menu-checkbox" />
                        <nav role="navigation">
                            <label for="menu-checkbox" class="toggle-button" data-open="Menu" data-close="close" onclick></label>
                            <?php
                            if ( has_nav_menu( 'footer_menu' ) ) {
                                wp_nav_menu(array(
                                    'theme_location'=> 'footer_menu',
                                    'menu'			=> 'Footer Menu',
                                    'menu_class'	=> 'footermenu cf main-menu-footer  clearfix  toggle-button-footer" data-open="menu" data-close="close',
                                    'walker'		=> new Aletheme_Nav_Walker(),
                                    'container'		=> '',
                                ));
                            }
                            ?>
                        </nav>
                    </menu>

                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="social">
                    <ul>
                        <li>
                            <a class="plus-google" href="https://plus.google.com"></a>
                        </li>
                        <li>
                            <a class="instagram" href="https://www.instagram.com/"></a>
                        </li>
                        <li>
                            <a class="facebook" href="https://www.facebook.com/"></a>
                        </li>
                        <li>
                            <a class="twitter" href="https://twitter.com/"></a>
                        </li>
                    </ul>
                </div><!-- /.social -->
            </div><!-- /.row -->


        </div>
        <!-- Scripts -->
        <?php wp_footer(); ?>
    </footer>

</body>
</html>