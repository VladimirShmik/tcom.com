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
        <!--news-section-->
        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-container">
                            <a href="#" class="title-block">
                                <h2 class="title-block__title">Обновления</h2>
                                <div class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </div>
                            </a>
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
                                    'category_name' => 'updates'
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {$query->the_post(); ?>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="swiper-block">
                                                <h4 class="swiper-block__title"><?php the_title(); ?></h4>
                                                <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail();
                                                } else {
                                                    echo '<img src="' . get_bloginfo("template_url") . '/assets/img/img-guides.png  " />';
                                                }?>
                                                <time class="swiper-block__time">Дата выхода: <b><?php the_date(); ?></b></time>
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
        <!--guides--section-->
        <section class="guides-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="guides-grid">
                            <!--guides-block-->
                            <div class="guides-block">
                                <a href="#" class="title-block">
                                    <h2 class="title-block__title">Гайды</h2>
                                    <div class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </div>
                                </a>
                                <p class="guides-block__subtitle">
                                    Изучай создание великих сокровищ и артефактов. Учись сражаться с кровожадными
                                    боссами и проходить сложные квесты.
                                    Разгадывай загадки и заводи питомцев. Познай силу и стань великим героем Мелерота!
                                </p>
                                <div class="guides-list">
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/items-icon.png"
                                             alt="Предметы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Предметы</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/quests-icon.png"
                                             alt="Квесты"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Квесты</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/boss-icon.png"
                                             alt="Боссы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Боссы</span>
                                    </a>

                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/talents-icon.png"
                                             alt="Таланты"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Таланты</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/trophies-icon.png"
                                             alt="Трофеи"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Трофеи</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/stickers-icon.png"
                                             alt="Наклейки"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Наклейки</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/talismans-icon.png"
                                             alt="Талисманы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Талисманы</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/pets-icon.png"
                                             alt="Питомцы"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Питомцы</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/chakras-icon.png"
                                             alt="Чакры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Профессии</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/chakras-icon.png"
                                             alt="Чакры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Кулоны</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/potions-icon.png"
                                             alt="Чакры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Зелья</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/chakras-icon.png"
                                             alt="Чакры"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Чакры</span>
                                    </a>
                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/elements-icon.png"
                                             alt="Стихии"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Стихии</span>
                                    </a>

                                    <a href="#" class="guides-link">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/paragons-icon.png"
                                             alt="Парагоны"
                                             class="guides-link__img">
                                        <span class="guides-link__text">Парагоны</span>
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
                                <a href="#" class="title-block">
                                    <h2 class="title-block__title">Галерея</h2>
                                    <div class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.pn"
                                   class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>

                        </div>
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
                            <a href="#" class="title-block">
                                <h2 class="title-block__title">FAQ</h2>
                                <div class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </div>
                            </a>
                            <p class="guides-block__subtitle mb-0">
                                Если у вас возникли проблемы с запуском, подключением или возникли проблемы во время
                                игры, то прочтите статьи из данного раздела
                            </p>
                            <div class="faq-grid">
                                <div class="faq-list">
                                    <a href="#" class="faq-list__link">Технические проблемы:</a>
                                    <?php $args = array(
                                        'posts_per_page' => 10,
                                        'category_name' => 'technical-problems'
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {$query->the_post(); ?>
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
                                        echo '<p class="faq-text">Записи отсутствуют</p>'; ?>
                                </div>
                                <div class="faq-list">
                                    <a href="#" class="faq-list__link">Игровые проблемы:</a>
                                    <?php $args = array(
                                        'posts_per_page' => 10,
                                        'category_name' => 'gaming-problems'
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {$query->the_post(); ?>
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
                                        echo '<p class="faq-text">Записи отсутствуют</p>'; ?>
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
                            <a href="#" class="title-block">
                                <h2 class="title-block__title">Магазин</h2>
                                <div class="title-box">
                                    <span class="title-box__title">Все</span>
                                    <svg class="title-box__icon">
                                        <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                    </svg>
                                </div>
                            </a>
                            <div class="swiper-arrows">
                                <div class="swiper-button-prev--shop"></div>
                                <div class="swiper-button-prev--shop"></div>
                            </div>
                        </div>
                        <!-- Slider main container -->
                        <div class="swiper swiperShop">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="swiper-block">
                                        <h4 class="swiper-block__title">Queen Azhara Optimized</h4>
                                        <img class="swiper-block__img"
                                             src="<?php echo bloginfo('template_url'); ?>/assets/img/skin-img.gif">
                                        <time class="swiper-block__time">Вес: <b>2.5мб</b></time>
                                        <a href="#" class="swiper-block__link">Подробнее</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-block">
                                        <h4 class="swiper-block__title">Queen Azhara Optimized</h4>
                                        <img class="swiper-block__img"
                                             src="<?php echo bloginfo('template_url'); ?>/assets/img/skin-img.gif">
                                        <time class="swiper-block__time">Вес: <b>2.5мб</b></time>
                                        <a href="#" class="swiper-block__link">Подробнее</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-block">
                                        <h4 class="swiper-block__title">Queen Azhara Optimized</h4>
                                        <img class="swiper-block__img"
                                             src="<?php echo bloginfo('template_url'); ?>/assets/img/skin-img.gif">
                                        <time class="swiper-block__time">Вес: <b>2.5мб</b></time>
                                        <a href="#" class="swiper-block__link">Подробнее</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-block">
                                        <h4 class="swiper-block__title">Queen Azhara Optimized</h4>
                                        <img class="swiper-block__img"
                                             src="<?php echo bloginfo('template_url'); ?>/assets/img/skin-img.gif">
                                        <time class="swiper-block__time">Вес: <b>2.5мб</b></time>
                                        <a href="#" class="swiper-block__link">Подробнее</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-block">
                                        <h4 class="swiper-block__title">Queen Azhara Optimized</h4>
                                        <img class="swiper-block__img"
                                             src="<?php echo bloginfo('template_url'); ?>/assets/img/skin-img.gif">
                                        <time class="swiper-block__time">Вес: <b>2.5мб</b></time>
                                        <a href="#" class="swiper-block__link">Подробнее</a>
                                    </div>
                                </div>
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
                                <a href="#" class="title-block">
                                    <h2 class="title-block__title">Видео</h2>
                                    <div class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="" class="gallery-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-gallery.png" alt=""
                                         class="gallery-link__img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--lore-section-->
        <section class="lore-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="lore-wrapper">
                            <div class="heading-container">
                                <a href="#" class="title-block">
                                    <h2 class="title-block__title">Лор TCOM</h2>
                                    <div class="title-box">
                                        <span class="title-box__title">Все</span>
                                        <svg class="title-box__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-title-icon"></use>
                                        </svg>
                                    </div>
                                </a>
                                <div class="swiper-arrows">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <p class="guides-block__subtitle">
                                Погрузись в лор ТСОМ’а и стань истинным воителем Мелерота!
                            </p>
                            <!-- Slider main container -->
                            <div class="swiper swiperLore">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title">Акт 1</h4>
                                            <img class="swiper-block__img"
                                                 src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-example.png">
                                            <a href="#" class="swiper-block__link">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title">Акт 2</h4>
                                            <img class="swiper-block__img"
                                                 src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-example.png">
                                            <a href="#" class="swiper-block__link">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title">Акт 3</h4>
                                            <img class="swiper-block__img"
                                                 src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-example.png">
                                            <a href="#" class="swiper-block__link">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-block">
                                            <h4 class="swiper-block__title">Акт 4</h4>
                                            <img class="swiper-block__img"
                                                 src="<?php echo bloginfo('template_url'); ?>/assets/img/slider-example.png">
                                            <a href="#" class="swiper-block__link">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>



