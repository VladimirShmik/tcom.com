<?php
/**
 * Displays the site header.
 * @package TCOM
 */
?>

<header  class="header">
    <div class="container-fluid">
        <div class="mobile-lang">
            <?php get_template_part( 'template-parts/header/header-lang' ); ?>
        </div>
        <div class="header-bg">
            <div class="header-wrapper">
                <?php get_template_part( 'template-parts/header/header-links' ); ?>
                <?php get_template_part( 'template-parts/header/header-menu' ); ?>
                <?php get_template_part( 'template-parts/header/header-lang' ); ?>
            </div>
        </div>
    </div>
</header><!-- header -->