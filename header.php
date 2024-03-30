<?php
/**
 * The header.
 * @package TCOM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" sizes="192x192"
          href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512"
          href="<?php echo bloginfo('template_url'); ?>/assets/img/favicon/android-chrome-512x512.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="TCOM">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('dark-theme'); ?> >
<?php wp_body_open(); ?>
<div class="site-wrapper">
    <!-- магик мелкий пездюк-->
    <?php get_template_part('template-parts/header/site-header'); ?>
