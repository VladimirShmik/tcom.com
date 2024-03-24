<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">

                    <div class="footer-copyright">
                        <div class="footer-box">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="footer-logo">
                            <p class="footer-copyright__text">TCOM 2016-2024</p>
                        </div>
                        <div class="d-block d-lg-none">
                            <?php get_template_part('template-parts/header/header-links'); ?>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand navbar-menu d-none d-lg-block">
                            <div class="collapse navbar-collapse" id="footer-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                    </nav>
                    <div class="d-none d-xl-block">
                    <?php get_template_part('template-parts/header/header-links'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="menu-backdrop"></div>
</div>
</body>
</html>
<?php wp_footer(); ?>