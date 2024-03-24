<?php
/**
 * Displays the site lang switcher.
 * @package TCOM
 */
?>

<div class="header-block">
    <div class="lang-block">
        <?php echo do_shortcode('[weglot_switcher]'); ?>
    </div>
    <button type="button" class="theme-button">
        <span class="theme-button__btn">       <svg class="theme-button__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#sun-icon"></use>
                                        </svg></span>
        <span class="theme-button__btn">       <svg class="theme-button__icon">
                                            <use href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#moon-icon"></use>
                                        </svg></span>
    </button>
</div>

