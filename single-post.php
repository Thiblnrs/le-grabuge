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
<?php while (have_posts() ) :the_post(); ?> ?>

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
<hr>
<h2>ARTICLES SIMILAIRES</h2>

</section>
    <section id="articles">
       
    <?php echo do_shortcode('[yarpp template="yarpp-template-posts" limit=3]') ?>
    </section>


    <!-- Partie article--------------------------------------->

    <section class="cta-prog">
        <div><a href="#">Plus d’article</a></div>
    </section>




<?php endwhile; ?>
</main><!-- #main -->

<?php
get_footer();