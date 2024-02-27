<?php
/**
 * Template Name: Категории продукции
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
                        <h1 class="content-wrapper__title">Productions</h1>
                        <div class="production-grid--content">
                            <?php $args = array('posts_per_page' => -1, 'category_name' => 'services');
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="production-item">
                                        <div class="img-wrap">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="production-block">
                                            <p class="production-block__title"><?php the_title(); ?></p>
                                            <p class="production-block__link">More</p>
                                        </div>
                                    </a>
                                <?php }
                                wp_reset_postdata();
                            } else
                                echo 'There are no entries.'; ?>
                        </div>
                    </div>
                </div>
            </div>
</main>
<?php get_footer(); ?>
