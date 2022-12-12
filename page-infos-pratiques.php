<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package le-grabuge
 */

get_header();
?>

<main>
    <div class="container">
        <h1><?php the_title() ?></h1>
        <hr>
    </div>
    <div class="tabs container">
        <button id="btn-billet">Acheter son billet</button>
        <button id="btn-handicap">Personnes en situation de handicap</button>
        <button id="btn-reglement">Règlement intérieur</button>
        <button id="btn-faq">FAQ</button>
    </div>
    <section id="billet" class="active">
        <div class="container">
            <h2>Acheter son billet</h2>
            <section class="bg-black"></section>
            <?php the_field('billet') ?>
        </div>
    </section>
    <section id="handicap">
        <div class="container">
            <h2>Personnes en situation de handicap</h2>
            <?php the_field('handicap') ?>
        </div>
    </section>
    <section id="reglement">
        <div class="container">
            <h2>Règlement intérieur</h2>
            <?php the_field('reglement') ?>
        </div>
    </section>

/* ACCORDEON FAQ */

    <section id="faq">
        <div class="container">
            <h2>FAQ</h2>
            <?php while( have_rows('faq') ) : the_row(); ?>
                <button class="accordion"><?php the_sub_field ("question") ?></button>

                <div class="panel">
                    <div>
                        <?php the_sub_field ("reponse") ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php
get_footer();