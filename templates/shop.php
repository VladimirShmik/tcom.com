<?php
/**
 * Template Name: Магазин
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
                        <article <?php post_class('production-grid--content'); ?>>
                            <h1 class="content-wrapper__title"><?php the_title(); ?></h1>
                            <div class="accordion accordionShop" id="accordionShop">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Информация к прочтению
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionShop">
                                        <div class="accordion-body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-grid">
                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $posts_per_page = ( wp_is_mobile() ) ? 4 : 16;
                                $args = array(
                                    'post_type' => 'shop_post_type',
                                    'posts_per_page' => $posts_per_page,
                                    'paged' => $paged,
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    ?>
                                    <!-- Слайды -->
                                    <div class="swiper-slide">
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title"><?php the_title(); ?></h4>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                                $image = get_post(get_post_thumbnail_id());
                                                echo '<a class="gallery-link gallery-link--height" href="' . $image_url[0] . '" data-caption="' . $image->post_title . '">';
                                                the_post_thumbnail();
                                                echo '</a>';
                                            } else {
                                                echo '<a class="gallery-link" href="' . get_bloginfo("template_url") . '/assets/img/img-guides.png">';
                                                echo '<img src="' . get_bloginfo("template_url") . '/assets/img/img-guides.png" />';
                                                echo '</a>';
                                            }
                                            ?>
                                            <time class="swiper-block__time">Вес:
                                                <b><?php echo esc_html(get_field('weight')); ?></b></time>
                                            <a href="<?php the_field('link'); ?>" class="swiper-block__link"
                                               target="_blank">Подробнее</a>
                                        </div>
                                    </div>
                                <?php
                                endwhile; ?>
                            </div>
                            <div class="pagination">
                                <?php echo paginate_links(array(
                                    'total' => $query->max_num_pages,
                                    'prev_text' => __('<'),
                                    'next_text' => __('>'),
                                    'mid_size' => 1,
                                )); ?>
                            </div>
                            <?php wp_reset_postdata();
                            } else {
                                echo '<p class="faq-text">Записи отсутствуют</p>';
                            }
                            ?>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>