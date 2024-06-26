<?php
function install_scripts()
{
    //Подключение CSS
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/scss/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/scss/swiper.min.css', array(), '1.0');
    wp_enqueue_style('scss-style', get_template_directory_uri() . '/assets/scss/style.css', array(), '1.0');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    //подключение JS
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap-bundle.min.js', array(), '1.0', false);
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0', false);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'install_scripts');

// Регистрируем меню
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'desktop-menu' => __( 'Главное меню' ),
            'footer-menu' => __( 'Нижнее меню' ),
            'mobile-menu' => __( 'Мобильное меню' ),
        )
    );
};
// Регистрируем изображения постов
add_theme_support( 'post-thumbnails');
// Создание кастомного типа записи
function shop_post_type() {
    $labels = array(
        'name'                  => _x( 'Скины', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Скин', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Магазин', 'text_domain' ),
        'name_admin_bar'        => __( 'Скин', 'text_domain' ),
        'archives'              => __( 'Архивы Скинов', 'text_domain' ),
        'attributes'            => __( 'Атрибуты Скинов', 'text_domain' ),
        'parent_item_colon'     => __( 'Родительский Скин:', 'text_domain' ),
        'all_items'             => __( 'Все Скины', 'text_domain' ),
        'add_new_item'          => __( 'Добавить новый Скин', 'text_domain' ),
        'add_new'               => __( 'Добавить новый', 'text_domain' ),
        'new_item'              => __( 'Новый Скин', 'text_domain' ),
        'edit_item'             => __( 'Редактировать Скин', 'text_domain' ),
        'update_item'           => __( 'Обновить Скин', 'text_domain' ),
        'view_item'             => __( 'Просмотреть Скин', 'text_domain' ),
        'view_items'            => __( 'Просмотреть Скины', 'text_domain' ),
        'search_items'          => __( 'Поиск Скинов', 'text_domain' ),
        'not_found'             => __( 'Скины не найдены', 'text_domain' ),
        'not_found_in_trash'    => __( 'Скины не найдены в корзине', 'text_domain' ),
        'featured_image'        => __( 'Изображение Скина', 'text_domain' ),
        'set_featured_image'    => __( 'Установить изображение Скина', 'text_domain' ),
        'remove_featured_image' => __( 'Удалить изображение Скина', 'text_domain' ),
        'use_featured_image'    => __( 'Использовать как изображение Скина', 'text_domain' ),
        'insert_into_item'      => __( 'Вставить в Скин', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Загружено для этого Скина', 'text_domain' ),
        'items_list'            => __( 'Список Скинов', 'text_domain' ),
        'items_list_navigation' => __( 'Навигация по списку Скинов', 'text_domain' ),
        'filter_items_list'     => __( 'Фильтр списка Скинов', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Скины', 'text_domain' ),
        'description'           => __( 'Описание Скинов', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail','custom-fields'),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'shop_post_type', $args );
}
add_action( 'init', 'shop_post_type', 0 );

function video_post_type() {
    $labels = array(
        'name'                  => _x( 'Видеозаписи', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Видеозапись', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Видео', 'text_domain' ),
        'name_admin_bar'        => __( 'Видеозапись', 'text_domain' ),
        'archives'              => __( 'Архивы Видеозаписей', 'text_domain' ),
        'attributes'            => __( 'Атрибуты Видеозаписей', 'text_domain' ),
        'parent_item_colon'     => __( 'Родительская Видеозапись:', 'text_domain' ),
        'all_items'             => __( 'Все Видеозаписи', 'text_domain' ),
        'add_new_item'          => __( 'Добавить новую Видеозапись', 'text_domain' ),
        'add_new'               => __( 'Добавить новую', 'text_domain' ),
        'new_item'              => __( 'Новая Видеозапись', 'text_domain' ),
        'edit_item'             => __( 'Редактировать Видеозапись', 'text_domain' ),
        'update_item'           => __( 'Обновить Видеозапись', 'text_domain' ),
        'view_item'             => __( 'Просмотреть Видеозапись', 'text_domain' ),
        'view_items'            => __( 'Просмотреть Видеозаписи', 'text_domain' ),
        'search_items'          => __( 'Поиск Видеозаписей', 'text_domain' ),
        'not_found'             => __( 'Видеозаписи не найдены', 'text_domain' ),
        'not_found_in_trash'    => __( 'Видеозаписи не найдены в корзине', 'text_domain' ),
        'featured_image'        => __( 'Изображение Видеозаписи', 'text_domain' ),
        'set_featured_image'    => __( 'Установить изображение Видеозаписи', 'text_domain' ),
        'remove_featured_image' => __( 'Удалить изображение Видеозаписи', 'text_domain' ),
        'use_featured_image'    => __( 'Использовать как изображение Видеозаписи', 'text_domain' ),
        'insert_into_item'      => __( 'Вставить в Видеозапись', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Загружено для этой Видеозаписи', 'text_domain' ),
        'items_list'            => __( 'Список Видеозаписей', 'text_domain' ),
        'items_list_navigation' => __( 'Навигация по списку Видеозаписей', 'text_domain' ),
        'filter_items_list'     => __( 'Фильтр списка Видеозаписей', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Видеозаписи', 'text_domain' ),
        'description'           => __( 'Описание Видеозаписей', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title','editor', 'custom-fields'),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'video_post_type', $args );
}
add_action( 'init', 'video_post_type', 0 );

function remove_menu_item_and_separator() {
    // Замените 'edit-comments.php' на нужный пункт меню
    remove_menu_page('edit-comments.php');
    // Удаляем сепаратор
    global $menu;
    $remove_menu = 'edit-comments.php';
    foreach ($menu as $key => $item) {
        if ($remove_menu == $item[2]) {
            unset($menu[$key + 1]);
            break;
        }
    }
}
add_action('admin_menu', 'remove_menu_item_and_separator');

require_once get_template_directory() . '/function-templates/bootstrap-navwalker.php';

add_filter( "rank_math/opengraph/twitter/twitter_creator", '__return_false');
add_filter( "rank_math/opengraph/twitter/twitter_site", '__return_false');








