<?php
/**
 * Template Name: Разводящая категорий
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
                        <h1 class="content-wrapper__title"><?php single_cat_title(); ?></h1>
                        <div class="content-description"><?php echo category_description(); ?></div>
                        <?php
                        $current_category = get_queried_object();
                        $subcategories = get_categories(array(
                            'parent' => $current_category->term_id,
                        ));
                        ?>
                        <?php
                        if ($subcategories && is_category()) {
                            echo '<div class="faq-list faq-list--sub">';
                            $count = 1; // Инициализация счетчика
                            foreach ($subcategories as $subcategory) {
                                echo '<a class="faq-link" href="' . get_category_link($subcategory->term_id) . '">';
                                echo '<span class="faq-link__number">' . $count . '. </span>'; // Добавляем номер
                                echo '<span class="faq-link__text">' . $subcategory->name . '</span>';
                                echo '</a>';
                                $count++; // Увеличиваем счетчик после каждой итерации
                            }
                            echo '</div>';
                        }
                        ?>
                        <?php
                        if (is_category() && $current_category->parent != 0) {
                            $args = array(
                                'cat' => $current_category->term_id,
                                'posts_per_page' => -1,
                            );

                            $query = new WP_Query($args);
                            echo '<div class="faq-list faq-list--sub">';
                            if ($query->have_posts()) {
                                $count = 1;
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>

                                    <a href="<?php the_permalink(); ?>" class="faq-link">
                                        <span class="faq-link__number"><?php echo $count; ?>. </span>
                                        <span class="faq-link__text"><?php the_title(); ?></span>
                                    </a>
                                    <?php
                                    $count++; // Увеличиваем счетчик после каждой итерации
                                }
                                wp_reset_postdata();
                                echo '</div>';
                            } else {
                                echo '<p class="faq-text">Записи отсутствуют</p>';
                            }
                        }
                        ?>

                        <?php if (is_category('news')) {
                            $args = array(
                                'cat' => $current_category->term_id,
                                'posts_per_page' => 3,
                            );
                            ?>
                            <div class="news-grid">
                                <?php
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title"><?php the_title(); ?></h4>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } else {
                                                echo '<img src="' . get_bloginfo("template_url") . '/assets/img/img-guides.png  " />';
                                            } ?>
                                            <time class="swiper-block__time">Дата выхода: <b><?php the_date(); ?></b>
                                            </time>
                                            <a href="<?php the_permalink(); ?>" class="swiper-block__link">Подробнее</a>
                                        </div>
                                    <?php }
                                    wp_reset_postdata();
                                } else {
                                    echo '<p class="faq-text">Записи отсутствуют</p>';
                                } ?>
                            </div>
                        <?php } ?>
                        <?php if (is_category('donate')) {
                        $args = array(
                            'cat' => $current_category->term_id,
                            'posts_per_page' => -1,
                        );
                        ?>
                        <div class="guides-list guides-list--donate">
                            <?php
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="guides-link">
                                        <?php the_post_thumbnail(); ?>
                                        <span class="guides-link__text"><?php the_title(); ?></span>
                                    </a>
                                <?php }
                                wp_reset_postdata();
                            } else {
                                echo '<p class="faq-text">Записи отсутствуют</p>';
                            }
                            } ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>
