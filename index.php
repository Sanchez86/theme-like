<?php
defined('ABSPATH') || exit;
?>
<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="wrap">
    <div class="content-wrapper">
        <div class="slider">
    <?php
    if (have_rows('slide')):

        while (have_rows('slide')) : the_row();
            $maly_naglowek = get_sub_field('maly_naglowek');
            $naglowek = get_sub_field('naglowek');
            $tresc = get_sub_field('tresc');
            $link = get_sub_field('link');
            $zdjecie_tla = get_sub_field('zdjecie_tla');
            ?>
                    <div class="slider__item">
                        <?php if( zdjecie_tla ): ?>
                            <img data-lazy="<?php echo get_sub_field('zdjecie_tla') ?>"
                                 src="<?php echo get_sub_field('zdjecie_tla') ?>"
                                 class="slider__img"
                                 alt="<?=$naglowek?>">
                        <?php endif; ?>
                        <div class="slider__wrapper">
                            <div class="slider__data">
                                <?php if( $maly_naglowek ): ?>
                                    <h3 class="slider__h3"><?= $naglowek; ?></h3>
                                <?php endif; ?>

                                <?php if( $maly_naglowek ): ?>
                                    <h2 class="slider__h2"><?= $maly_naglowek; ?></h2>
                                <?php endif; ?>

                                <?php if( $tresc ): ?>
                                    <p class="slider__p"><?= $tresc; ?></p>
                                <?php endif; ?>

                                <?php if( $link ): ?>
                                    <a href="<?= $link; ?>" class="slider__a"><?php _e('more','like'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


        <?php endwhile; endif; ?>
        </div>
        <div class="controller">
                    <div class="controller__current-number">
                        <div class="controller-current-number-js">01</div>
                        <div class="controller__start controller-start-js">start</div>
                    </div>
                    <div class="controller__dots controller-dots-js"></div>
                </div>
    </div>
</div>
<?php endwhile;?>
<?php endif; ?>

<?php get_footer(); ?>