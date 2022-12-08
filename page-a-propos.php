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

	<h1>Notre histoire</h1>

<!-- SLIDE / SLICK--------------------------------------->
    <section id="diapo">
        <div class="multiple-items">
            <?php 
                $galeries = get_field('galerie');
                if( $galeries ): ?>
            <?php foreach( $galeries as $galerie ): ?>
            <img src="<?php echo esc_url($galerie['url']); ?>" alt="<?php echo esc_attr($galerie['alt']); ?>" />
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

	 <!-- citation--------------------------------------->
    <section id="citation">
        <?php 
            if( have_rows('citations') ):
                while( have_rows('citations') ) : the_row(); ?>
        <div>
            <p><?php the_sub_field('texte_citation') ?></p>
        </div>
        <?php   endwhile;
                else :
            endif;
        ?>
    </section>

    <!-- Raccourcis--------------------------------------->
    <nav id="raccourcis">
        <?php wp_nav_menu( array(
								'theme_location' => 'menu-principal',
								'container' => '',
								'menu_class' => '',
									)
								) ?>
    </nav>

	</main><!-- #main -->

<?php
get_footer();
