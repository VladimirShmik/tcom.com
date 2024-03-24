<?php
/**
 * Displays the site navigation.
 * @package TCOM
 */
?>
<nav class="navbar navbar-expand-lg navbar-menu">
    <div class="navbar-box">
        <a href="/" class="header-logo d-block d-lg-none">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
            <div class="mobile-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
</nav>
