<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">
                    <div class="footer-copyright">
                        <img src="" alt="" class="footer-copyright__img">
                        <p class="footer-copyright__text">TCOM с 2016 по 2024</p>
                    </div>
                    <div class="footer-nav">
                        <?php wp_nav_menu([ 'theme_location'  => 'footer-menu' ]); ?>
                </div>
                    <?php get_template_part( 'template-parts/header/header-links' ); ?>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="menu-backdrop"></div>
</div>
</body>
</html>
<?php wp_footer(); ?>