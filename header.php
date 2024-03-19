<?php
/**
 * The header.
 * @package TCOM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('dark-theme'); ?> >
<?php wp_body_open(); ?>
<div class="site-wrapper">
    <?php get_template_part( 'template-parts/header/site-header' ); ?>
