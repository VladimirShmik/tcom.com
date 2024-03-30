<?php
/**
 * Template Name: single template
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                        <!--content-section-->
                        <div class="content-wrapper">
                            <article <?php post_class('production-grid--content'); ?>>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <h1 class="content-wrapper__title"><?php the_title(); ?></h1>
                                    <div class="content-grid">
                                        <?php the_content(''); ?>
                                    </div>
                                <?php endwhile; else: ?>
                                    <?php _e('<br><br>Скоро здесь будет много интересного, а пока начните просмотр с главной страницы...'); ?>
                                    <br>
                                <?php endif; ?><br>
                                <?php wp_reset_postdata(); ?>
                            </article>
                        </div>
                </div>
            </div>
    </main>
<?php get_footer(); ?>