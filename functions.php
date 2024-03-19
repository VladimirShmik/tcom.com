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
            'mobile-menu' => __( 'Мобильное меню' ),
            'footer-menu' => __( 'Нижнее меню' ),
        )
    );
};
// Регистрируем изображения постов
add_theme_support( 'post-thumbnails');
// Создание кастомного типа записи
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

// Регистрация виджета консоли
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );

// Используется в хуке
function add_dashboard_widgets() {
    wp_add_dashboard_widget( 'my_dashboard_widget', 'Метабокс в консоли', 'my_dashboard_widget_function' );
}

// Выводит контент
function my_dashboard_widget_function( $post, $callback_args ) {
    echo 'Всем привет! Это мой первый виджет!';
}
require_once get_template_directory() . '/function-templates/kama-pagination.php';







