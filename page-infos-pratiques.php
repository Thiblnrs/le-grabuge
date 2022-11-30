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
    <h1><?php the_title() ?></h1>
    <div class="tabs">
        <button>Acheter son billet</button>
        <button>Personnes en situation de handicap</button>
        <button>Règlement intérieur</button>
        <button>FAQ</button>
    </div>
    <section id="billet">
        <h2>Acheter son billet</h2>
    </section>
    <section id="handicap">
        <h2>Personnes en situation de handicap</h2>
    </section>
    <section id="reglement">
        <h2>Règlement intérieur</h2>
    </section>
    <section id="faq">
        <h2>FAQ</h2>
    </section>
</main><!-- #main -->

<?php
get_footer();