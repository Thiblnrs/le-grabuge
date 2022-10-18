<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package le-grabuge
 */

get_header();
?>
<main class="container">
    <div class="width-thumbnail">
        <?php the_post_thumbnail()?>
    </div>

    <section class="container-contenu">
        <?php the_category()?>
        <h1><?php the_title()?></h1>
        <hr>
        <?php the_content()?>
        <p class="tag"><?php the_tags()?></p>

    </section>

    <section>

        <div>
            <?php yarpp_related() ?>
            <div class="cta-esp"><a href="<?php the_permalink() ?>">En lire plus</a></div>
        </div>
    </section>

    <!-- Partie article--------------------------------------->

    <section class="cta-prog">
        <div><a href="#">Plus d’article</a></div>
    </section>





</main><!-- #main -->

<?php
get_footer();