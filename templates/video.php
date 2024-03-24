<?php
/**
 * Template Name: Видео
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <div class="breadcrumbs-bg">
                        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    </div>
                    <!--content-section-->
                    <div class="content-wrapper">
                        <h1 class="content-wrapper__title"><?php the_title(); ?></h1>
                        <div class="production-grid--content">
                            <div class="news-grid">
                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'video_post_type',
                                    'posts_per_page' => 12,
                                    'paged' => $paged,
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    ?>
                                    <div class="gallery-item">
                                        <?php the_content(); ?>
                                    </div>
                                <?php
                                endwhile;?>
                            </div>
                            <div class="pagination">
                                <?php echo paginate_links(array(
                                    'total' => $query->max_num_pages,
                                    'prev_text' => __('<'),
                                    'next_text' => __('>'),
                                    'mid_size' => 1,
                                ));?>
                            </div>
                            <?php   wp_reset_postdata();
                            } else {
                                echo '<p class="faq-text">Записи отсутствуют</p>';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>