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
<hr>
<h2>AUTRES ARTICLES</h2>

</section>
    <section id="articles">
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            
            $query = new WP_Query($args);
            
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
        <div>
            <?php the_post_thumbnail() ?>
            <h3 class="title-padding"><?php the_title() ?></h3>
            <?php the_excerpt() ?>
            <div class=" cta-esp"><a href="<?php the_permalink() ?>">En lire plus</a>
            </div>
        </div>
        <?php endwhile;
            endif;
            
            wp_reset_postdata();
        ?>
    </section>


    <!-- Partie article--------------------------------------->

    <section class="cta-prog">
        <div><a href="#">Plus d’article</a></div>
    </section>





</main><!-- #main -->

<?php
get_footer();