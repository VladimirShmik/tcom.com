<?php
/**
 * Template Name: Галерея
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <div class="breadcrumbs">
                        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    </div>
                    <div class="content-wrapper">
                        <h1 class="content-wrapper__title"><?php the_title(); ?></h1>
                        <div class="production-grid--content">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type'      => 'attachment',
                                'post_status'    => 'inherit',
                                'orderby'        => 'post_date',
                                'order'          => 'DESC',
                                'posts_per_page' => 16,
                                'paged' => $paged,
                                'post_mime_type' => 'image',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'attachment_category',
                                        'field'    => 'id',
                                        'terms'    => 63,
                                        'operator' => 'NOT IN',
                                    ),
                                ),
                            );

                            $recent_images_query = new WP_Query($args);
                            ?>
                            <?php if ($recent_images_query->have_posts()) : ?>
                                <div class="gallery gallery-grid">
                                    <?php while ($recent_images_query->have_posts()) :
                                        $recent_images_query->the_post();
                                        $image_url = wp_get_attachment_image_src(get_the_ID(), 'full');
                                        ?>
                                        <div class="gallery-item">
                                            <a class="gallery-link" href="<?php echo esc_url($image_url[0]); ?>" data-caption="<?php echo esc_attr(get_the_title()); ?>">
                                                <img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                </div><!-- .gallery.gallery-grid -->
                                <div class="pagination">
                                    <?php echo paginate_links(array(
                                        'total' => $recent_images_query->max_num_pages,
                                        'prev_text' => __('<'),
                                        'next_text' => __('>'),
                                        'mid_size' => 1,
                                    ));?>
                                </div>
                                <?php   wp_reset_postdata();
                            else :
                                echo '<p class="faq-text">Записи отсутствуют</p>';
                            endif;
                            ?>


                        </div>
                    </div>
                </div>
                </div>
            </div>
    </main>
<?php get_footer(); ?>