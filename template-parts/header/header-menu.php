<?php
/**
 * Displays the site navigation.
 * @package TCOM
 */
?>
<nav class="navbar navbar-expand-lg navbar-menu">
    <div class="mobile-wrap">
        <div class="mobile-nav">
            <a href="/" class="header-logo d-flex d-lg-none">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="footer-logo">
                <p class="header-copyright__text">TCOM</p>
            </a>
            <div class="burger-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <div class="menu-wrap">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 1,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <?php get_template_part( 'template-parts/header/header-lang' ); ?>
        </div>
    </div>
        <div class="collapse navbar-collapse" id="main-menu">
            <div class="desktop-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'desktop-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
</nav>
