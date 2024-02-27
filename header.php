<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('dark-theme'); ?> >
<div class="site-wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-bg">
                        <div class="header-wrapper">
                            <div class="header-links">
                                <a href="/" class="header-logo">
                                    <img src="http://dummyimage.com/50x50/" alt="">
                                </a>
                                <div class="header-box">
                                    <a href="" class="box-link">
                                        <svg class="box-link__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#discord-icon"></use>
                                        </svg>
                                    </a>
                                    <a href="" class="box-link">
                                        <svg class="box-link__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#vk-icon"></use>
                                        </svg>
                                    </a>
                                    <a href="" class="box-link">
                                        <svg class="box-link__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#youtube-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <nav class="desktop-menu">
                                <?php wp_nav_menu(array('theme_location' => 'desktop-menu')); ?>
                            </nav>
                            <div class="header-block">
                                <div class="lang-block">
                                    <?php $lang_array = pll_the_languages(array('hide_current' => 0, 'raw' => 1)); ?>
                                    <?php if ($lang_array) : ?>
                                        <div class="dropdown lang-dropdown">
                                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <?php echo pll_current_language('name') ?>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <?php foreach ($lang_array as $lang) : ?>
                                                    <a href="<?php echo $lang['url']; ?>" class="dropdown-item">
                                                        <?php echo $lang['name']; ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <button type="button" class="theme-button">
                                    <span class="theme-button__btn">Light</span>
                                    <span class="theme-button__btn">Black</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
