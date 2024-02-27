<?php
/**
 * Template Name: single template
 */
?>
<?php get_header(); ?>
<?php ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <div class="breadcrumbs">
                        <?php woocommerce_breadcrumb() ?>
                    </div>
                    <div class="simple-block">
                        <!--content-section-->
                        <h2 class="content-wrapper">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h2 class="content-wrapper__title"><?php the_title(''); ?></h2>
                            <div class="content-grid">
                                <?php the_content(''); ?>
                            </div>
                            <?php endwhile; else: ?>
                                <?php _e('There will be a lot of interesting things here soon, but for now, start browsing from the main page...'); ?>
                                <br>
                            <?php endif; ?><br>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php get_footer(); ?>