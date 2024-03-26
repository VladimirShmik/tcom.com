<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>
<main class="main">
    <div class="main-bg">
        <!--slider-section-->
        <section class="slider-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-slider">
                            <?php echo do_shortcode('[slide-anything id="64"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--скачка карты с диса-->
<!--        <section class="map-section">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="map-wrapper">-->
<!--                            <div class="map-block">-->
<!--                                -->
<!--                            </div>-->
<!--                            <div class="map-qr">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <!--news-section-->
        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-container">
                            <div class="title-block">
                                <h2 class="title-block__title">Обновления</h2>
                                <a  href="<?php echo bloginfo('url'); ?>/category/news/" class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="swiper-arrows">
                                <div class="swiper-button-prev swiper-button-prev--news"></div>
                                <div class="swiper-button-next swiper-button-next--news"></div>
                            </div>
                        </div>
                        <!-- Slider main container -->
                        <div class="swiper swiperNews">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php $args = array(
                                    'posts_per_page' => 10,
                                    'category_name' => 'news'
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="swiper-block">
                                                <h4 class="swiper-block__title"><?php the_title(); ?></h4>
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail();
                                                } else {
                                                    echo '<img src="' . get_bloginfo("template_url") . '/assets/img/img-guides.png  " />';
                                                } ?>
                                                <time class="swiper-block__time">Дата выхода:
                                                    <b><?php the_date(); ?></b></time>
                                                <a href="<?php the_permalink(); ?>"
                                                   class="swiper-block__link">Подробнее</a>
                                            </div>
                                        </div>
                                    <?php }
                                    wp_reset_postdata();
                                } else
                                    echo '<p class="faq-text">Записи отсутствуют</p>'; ?>
                                <!-- Slides -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--guides--section-->
        <section class="guides-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="guides-grid">
                            <!--guides-block-->
                            <div class="guides-block">  
                                <div class="title-block">
                                    <h2 class="title-block__title">Гайды</h2>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/" class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                                <p class="guides-block__subtitle">
                                    Изучай создание великих сокровищ и артефактов. Учись сражаться с кровожадными
                                    боссами и проходить сложные квесты.
                                    Разгадывай загадки и заводи питомцев. Познай силу и стань великим героем
                                    Мелерота!
                                </p>
                                <div class="guides-list ">
                                    <a href="<?php echo bloginfo('url'); ?>/404" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/items-icon.png"
                                             alt="Предметы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Предметы</span>
                                    </a>
                                    <a href="https://tcom-orpg.com/guides/quests/" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/quests-icon.png"
                                             alt="Квесты"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Квесты</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/404" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/boss-icon.png"
                                             alt="Боссы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Боссы</span>
                                    </a>

                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/talents/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/talents-icon.png"
                                             alt="Таланты"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Таланты</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/talents/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/trophies-icon.png"
                                             alt="Трофеи"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Трофеи</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/blessing/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/blessings-icon.png"
                                             alt="Благославления"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Благославления</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/talismans/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/talismans-icon.png"
                                             alt="Талисманы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Талисманы</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/pets/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/pets-icon.png"
                                             alt="Питомцы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Питомцы</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/professions/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/professions-icon.png"
                                             alt="Профессии"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Профессии</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/pendants/" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/pendants-icon.png"
                                             alt="Кулоны"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Кулоны</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/potions/" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/potions-icon.png"
                                             alt="Зелья"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Зелья</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/chakras/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/chakras-icon.png"
                                             alt="Чакры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Чакры</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/elements/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/elements-icon.png"
                                             alt="Стихии"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Стихии</span>
                                    </a>

                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/paragons/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/paragons-icon.png"
                                             alt="Парагоны"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Парагоны</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/paragons/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/couriers-icon.png"
                                             alt="Курьеры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Курьеры</span>
                                    </a>
                                    <a href="<?php echo bloginfo('url'); ?>/category/guides/miscellaneous/"
                                       class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/miscellaneous-icon.png"
                                             alt="Разное"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Разное</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--gallery--section-->
        <section class="gallery-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gallery-wrapper">
                            <div class="heading-container">
                                <div class="title-block">
                                    <h2 class="title-block__title">Галерея</h2>
                                    <a href="<?php echo bloginfo('url'); ?>/gallery"  class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p class="guides-block__subtitle">
                            Полезные и позновательские скрины с TCOM.
                        </p>
                        <?php
                        $args = array(
                            'post_type' => 'attachment',
                            'post_status' => 'inherit',
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'posts_per_page' => 10,
                            'post_mime_type' => 'image',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'attachment_category',
                                    'field' => 'id',
                                    'terms' => 63,
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
                                    <a class="gallery-link gallery-link--gallery" href="<?php echo $image_url[0]; ?>"
                                       data-caption="<?php echo $image->post_title; ?>">
                                        <img src="<?php echo $image_url[0]; ?>"
                                             alt="<?php echo $image->post_title; ?>">
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
        </section>
        <!--faq-section-->
        <section class="faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-block">
                            <div class="title-block">
                                <h2 class="title-block__title">FAQ</h2>
                                <a href="<?php echo bloginfo('url'); ?>/category/faq/" class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <p class="guides-block__subtitle mb-0">
                                Если у вас возникли проблемы с запуском, подключением или возникли проблемы во время
                                игры, то прочтите статьи из данного раздела
                            </p>
                            <div class="faq-grid">
                                <div class="faq-list">
                                    <a href="<?php echo bloginfo('url'); ?>/faq/technical-problems/" class="faq-list__link">Технические проблемы:</a>
                                    <?php $args = array(
                                        'posts_per_page' => 10,
                                        'category_name' => 'technical-problems'
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post(); ?>
                                            <a href="<?php the_permalink(); ?>" class="faq-link">
                                                <span class="faq-link__text"><?php the_title(); ?></span>
                                                <div class="title-box">
                                                    <svg class="title-box__icon">
                                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-icon"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        <?php }
                                        wp_reset_postdata();
                                    } else
                                        echo '<p class="faq-text pt-3">Записи отсутствуют</p>'; ?>
                                </div>
                                <div class="faq-list">
                                    <a href="<?php echo bloginfo('url'); ?>/faq/gaming-problems/" class="faq-list__link">Игровые проблемы:</a>
                                    <?php $args = array(
                                        'posts_per_page' => 10,
                                        'category_name' => 'gaming-problems'
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post(); ?>
                                            <a href="<?php the_permalink(); ?>" class="faq-link">
                                                <span class="faq-link__text"><?php the_title(); ?></span>
                                                <div class="title-box">
                                                    <svg class="title-box__icon">
                                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-icon"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        <?php }
                                        wp_reset_postdata();
                                    } else
                                        echo '<p class="faq-text pt-3">Записи отсутствуют</p>'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--shop-section-->
        <section class="shop-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-container">
                            <div class="title-block">
                                <h2 class="title-block__title">Магазин</h2>
                                <a href="<?php echo bloginfo('url'); ?>/shop/" class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="swiper-arrows">
                                <div class="swiper-button-prev swiper-button-prev--shop"></div>
                                <div class="swiper-button-next swiper-button-next--shop"></div>
                            </div>
                        </div>
                        <p class="guides-block__subtitle">
                            Лучшие скины для вашего героя в TCOM.
                        </p>
                        <!-- Slider main container -->
                        <div class="swiper swiperShop">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'posts_per_page' => 10,
                                    'post_type' => 'shop_post_type' // Установите тип записи 'shop'
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
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
                                                    echo '<a class="gallery-link" href="' . $image_url[0] . '" data-caption="' . $image->post_title . '">';
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
                                    }
                                    wp_reset_postdata();
                                } else {
                                    echo '<p class="faq-text">Записи отсутствуют</p>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--video--section-->
        <section class="video-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gallery-wrapper">
                            <div class="heading-container">
                                <div class="title-block">
                                    <h2 class="title-block__title">Видео</h2>
                                    <a href="<?php echo bloginfo('url'); ?>/video/" class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p class="guides-block__subtitle">
                            Сборник разнообразных видео по TCOM.
                        </p>

                        <?php
                        $args = array(
                            'posts_per_page' => 6,
                            'post_type' => 'video_post_type' // Установите тип записи 'shop'
                        );

                        $query = new WP_Query($args); ?>
                        <div class="gallery-grid gallery-grid--video">
                            <?php if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="gallery-item">
                                    <?php the_content(); ?>
                                </div>
                                <?php
                            }
                            wp_reset_postdata(); ?>
                        </div>
                    <?php
                    } else {
                        echo '<p class="faq-text">Записи отсутствуют</p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!--lore-section-->
        <section class="lore-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="heading-container">
                                <div class="title-block">
                                    <h2 class="title-block__title">Лор TCOM</h2>
                                    <a href="<?php echo bloginfo('url'); ?>/category/lore/" class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="swiper-arrows">
                                    <div class="swiper-button-prev swiper-button-prev--lore"></div>
                                    <div class="swiper-button-next swiper-button-next--lore"></div>
                                </div>
                            </div>
                        <p class="guides-block__subtitle">
                            Погрузись в лор ТСОМ’а и стань истинным воителем Мелерота!
                        </p>
                        <!-- Slider main container -->
                        <div class="swiper swiperLore">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php $args = array(
                                    'posts_per_page' => 10,
                                    'category_name' => 'lore'
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="swiper-block">
                                                <h4 class="swiper-block__title"><?php the_title(); ?></h4>
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail();
                                                } else {
                                                    echo '<img src="' . get_bloginfo("template_url") . '/assets/img/img-guides.png  " />';
                                                } ?>
                                                <time class="swiper-block__time">Дата выхода:
                                                    <b><?php the_date(); ?></b></time>
                                                <a href="<?php the_permalink(); ?>" class="swiper-block__link">Подробнее</a>
                                            </div>
                                        </div>
                                    <?php }
                                    wp_reset_postdata();
                                } else
                                    echo '<p class="faq-text">Записи отсутствуют</p>'; ?>
                                <!-- Slides -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>



