<?php
/**
 * Displays the site header.
 * @package TCOM
 */
?>

<header  class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-bg">
                    <div class="header-wrapper">
                        <?php get_template_part( 'template-parts/header/header-links' ); ?>
                        <?php get_template_part( 'template-parts/header/header-menu' ); ?>
                        <?php get_template_part( 'template-parts/header/header-lang' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- header -->