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
    <?php $args = array(
		'post_type' => 'concert',
		'posts_per_page' => 1,
		'meta_key'  => 'date',
		'orderby'   => 'meta_value_num',
		'order'     => 'ASC',
	);
	
	$prochainConcert = new WP_Query($args);
	
	if ( $prochainConcert->have_posts() ) :
		while ( $prochainConcert->have_posts() ) : $prochainConcert->the_post(); ?>

    <section>
        <div id="cover" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
            <div id="cover-bg">
                <div id="desc">
                    <h2><?php the_title() ?></h2>
                    <hr class="hr-desc" />
                    <?php the_content() ?>

                    <div class="cover-date">
                        <?php 
								$dateFR = strtotime( get_field('date') );
							?>
                        <p>
                            <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                        </p>
                        <p><?php the_field("style_")?></p>
                    </div>
                    <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                    <div class="cta-b"><a href="#">Billetterie</a></div>
                </div>
            </div>
        </div>
        <!--Description-------------------------------------->
    </section>

    <?php endwhile;
	endif;
	
	wp_reset_postdata(); ?>


    <!-- FIN COVER--------------------------------------->
    <!-- TITRE PROCHAINEMENT--------------------------------------->
    <section class="container prochainement">
        <h2>Prochainement au grabuge</h2>
        <hr />
    </section>

    <!-- Prochain artiste--------------------------------------->
    <section id="prochain-artiste" class="container">
        <div>
            <?php $args = array(
							'post_type' => 'concert',
							'posts_per_page' => 2,
							'meta_key'  => 'date',
							'offset'    => 1,
							'orderby'   => 'meta_value_num',
							'order'     => 'ASC',
						);
				
				$concertsAVenir = new WP_Query($args);
				
				if ( $concertsAVenir->have_posts() ) :
					while ( $concertsAVenir->have_posts() ) : $concertsAVenir->the_post(); ?>

            <div class="cont-artiste">
                <div>
                    <?php $photo_artiste = get_field('photo_artiste') ?>
                    <img src="<?php echo $photo_artiste['sizes']['medium'] ?>"
                        alt="<?php echo $photo_artiste['alt'] ?>" />
                    <div class="cover-date">
                        <p>
                            <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                        </p>
                        <p><?php the_field("style_")?></p>
                    </div>

                    <hr class="hr-desc" />

                    <h3><?php the_title() ?><br />
                        <span><?php the_field('premiere-partie') ?></span>
                    </h3>

                    <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                    <div class="cta-b"><a href="">Billetterie</a></div>
                </div>
            </div>
            <?php endwhile;
				endif;
				
				wp_reset_postdata(); ?>
        </div>

        <section class="cta-prog">
            <div><a href="https://cdui.amigrafdev.com/thibault/concert/">PROGRAMMATION COMPLÈTE</a></div>

            <hr />
        </section>
    </section>

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
    <!-- DESCRIPTION SALLE--------------------------------------->
    <section id="desc-salle">
        <div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/grabuge-ext.jpg" alt="" />
            <div class="desc-salle-texte">
                <h4>Le grabuge c'est quoi ?</h4>
                <p>Situé sur Lille LE GRABUGE est une salle de spectacle dédiée aux musiques électroniques. <br>
               Retrouvez une line-up aux multiples sonoritées tous les Samedis soir de 20.00 à 00.00.</p>

                <div class="cta-bw"><a href="#">À propos</a></div>
            </div>
        </div>
    </section>

    <!-- Plus que des concerts titre--------------------------------------->
    <section class="container prochainement">
        <hr />
        <h2>L'ACTU DU GRABUGE</h2>
    </section>

    <!-- Plus que des concerts Articles--------------------------------------->

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
            <h4><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <div class=" cta-esp"><a href="<?php the_permalink() ?>">En lire plus</a>
            </div>
        </div>
        <?php endwhile;
            endif;
            
            wp_reset_postdata();
        ?>

    </section id="plus-article-home">
    <section class="cta-prog">
        <div><a href="#">Plus d’articles</a></div>
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
</main>
<?php
get_footer();