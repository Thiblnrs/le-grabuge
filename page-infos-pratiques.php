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

<main class="container"><div>
    <h1><?php the_title() ?></h1>
    <hr>
    </div>
    <div class="tabs">
        <button id="btn-billet">Acheter son billet</button>
        <button id="btn-handicap">Personnes en situation de handicap</button>
        <button id="btn-reglement">Règlement intérieur</button>
        <button id="btn-faq">FAQ</button>
    </div>
    <section id="billet" class="active">
        <h2>Acheter son billet</h2>
        <?php the_field('billet') ?>
    </section>
    <section id="handicap">
        <h2>Personnes en situation de handicap</h2>
        <?php the_field('handicap') ?>
    </section>
    <section id="reglement">
        <h2>Règlement intérieur</h2>
        <?php the_field('reglement') ?>
    </section>
    <section id="faq">
        <h2>FAQ</h2>
    </section>
</main>
<section class="bg-black"></section><!-- #main -->

<?php
get_footer();