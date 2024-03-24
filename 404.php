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
                    <div class="content-grid">
                        <div class="col-md">
                            <h1 class="content-wrapper__title">Страница не найдена. Ошибка 404</h1>
                        </div>
                        <div class="col-md">
                            <h3 class="mb-3">Вы могли оказаться здесь по нескольким причинам</h3>
                            <p>1. Скорее всего URL введен неверно</p>
                            <p>2. Страница, которую вы ищете, была перемещена или переименована</p>
                            <p>3. Эта страница больше не существует</p>
                            <p>Начать навигацию с <a href="<?php bloginfo('url'); ?>/">домашней страницы</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>

