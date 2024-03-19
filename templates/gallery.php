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
                            $args = array(
                                'post_type' => 'attachment',
                                'post_status' => 'inherit',
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'posts_per_page' => -1,
                                'post_mime_type' => 'image',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'attachment_category',
                                        'field'    => 'id',
                                        'terms'    => 63,
                                        'operator' => 'NOT IN',
                                    ),
                                ),
                            );


                            $recent_images = get_posts($args);

                            if ($recent_images) {
                                echo '<div class="gallery gallery-grid">';
                                foreach ($recent_images as $image) {
                                    $image_url = wp_get_attachment_image_src($image->ID, 'full');
                                    ?>
                                    <div class="gallery-item">
                                        <a class="gallery-link" href="<?php echo $image_url[0]; ?>" data-caption="<?php echo $image->post_title; ?>">
                                            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image->post_title; ?>">
                                        </a>
                                    </div>
                                    <?php
                                }
                                echo '</div>';
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