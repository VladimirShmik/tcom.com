<?php
/**
 * Template Name: Донат
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <div class="breadcrumbs">
                        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    </div>
                    <div class="content-wrapper">
                        <?php if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                ?>
                                <article <?php post_class('production-grid--content'); ?>>
                                    <h1 class="content-wrapper__title"><?php the_title(); ?></h1>
                                    <div class="accordion custom-accordion" id="donateAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    Важная информация к прочтению
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                 aria-labelledby="headingOne" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                    Перенос героя со старой версии
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                 aria-labelledby="headingTwo" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php echo get_field("transfer-hero"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                    Привелегии PLATINUM
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="headingThree" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php echo get_field("platinum"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                    Привилегии DELUXE
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                 aria-labelledby="headingFour" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php echo get_field("deluxe"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                    Привилегии VIP
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                 aria-labelledby="headingFive" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php echo get_field("vip"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                    Стартовые наборы
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                 aria-labelledby="headingSix" data-bs-parent="#donateAccordion">
                                                <div class="accordion-body">
                                                    <?php echo get_field("starting-set"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        else :
                            echo '<p class="faq-text">Записи отсутствуют</p>';
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>