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
        <section>
            <h1>LE GRABUGE C'EST QUOI ?</h1>
            <hr class="h1-hr">
            <?php the_post_thumbnail() ?>
        </section>

        <section>
            <h2>NOTRE HISTOIRE</h2>
            <?php the_content() ?>
            <hr>
        </section>
        <section id="liste-artiste">
            <h2>ILS VONT PASSER AU GRABUGE</h2>
            <p>
                <?php while( have_rows('liste-artiste') ) : the_row(); ?>
                    <span><?php the_sub_field('nom-artiste') ?></span> - 
                <?php endwhile; ?>...
            </p>
        </section>
        <section class="cta-prog">
            <hr>
            <h2>ENCORE PLUS D'INFO</h2>
            <div><a href="<?php echo home_url() ?>/infos-pratiques/">INFOS PRATIQUES</a></div>
        </section>
    </div>
    <!-- SLIDE / SLICK--------------------------------------->
    <section id="diapo">
        <div class="multiple-items">
            <?php 
                $galeries = get_field('galerie',7);
                if( $galeries ): ?>
                    <?php foreach( $galeries as $galerie ): ?>
                        <img src="<?php echo esc_url($galerie['url']); ?>" alt="<?php echo esc_attr($galerie['alt']); ?>" />
                    <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- citation--------------------------------------->
    <section id="citation">
        <?php  while( have_rows('citations',7) ) : the_row(); ?>
            <div>
                <p><?php the_sub_field('texte_citation',7) ?></p>
            </div>
        <?php endwhile;  ?>
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
