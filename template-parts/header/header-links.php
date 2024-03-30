<?php
/**
 * Displays the site links.
 * @package TCOM
 */
?>

<div class="header-links">
    <a href="/" class="header-logo">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
        <p class="header-copyright__text">TCOM</p>
    </a>
    <div class="header-box">
        <a href="https://discord.gg/wByBUPZuHP" class="box-link" target="_blank">
            <svg class="box-link__icon">
                <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#discord-icon"></use>
            </svg>
        </a>
        <a href="https://vk.com/tcom_orpg" class="box-link" target="_blank">
            <svg class="box-link__icon">
                <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#vk-icon"></use>
            </svg>
        </a>
        <a href="https://www.youtube.com/channel/UCf7hupd2KAAOmQe0IGp25pA" class="box-link" target="_blank">
            <svg class="box-link__icon">
                <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#youtube-icon"></use>
            </svg>
        </a>
    </div>
</div>

