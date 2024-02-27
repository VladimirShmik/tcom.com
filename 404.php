<?php
/**Template for 404*/
?>
<?php get_header(); ?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--breadcrumbs-->
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <!--content-section-->
                <div class="content-wrapper">
                    <h2 class="content-wrapper__title"><?php the_title(''); ?></h2>
                    <div class="content-grid">
                        <div class="col-md">
                            <h1 class="content-wrapper__title">Page not found. Error 404</h1>
                        </div>
                        <div class="col-md">
                            <h3 class="mb-3">You could be here for several reasons</h3>
                            <p>1. Most likely the URL was entered incorrectly</p>
                            <p>2. The page you are looking for has been moved or renamed</p>
                            <p>3. This page no longer exists</p>
                            <p>Start navigation from</p> <a href="<?php bloginfo('url'); ?>/">home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>

