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
    <div id="detail-concert">
        <div>
            <div class="cover-date">
                <p>
                    <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                    <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                    <?php the_field('heure_douverture') ?> - <?php the_field('heure_de_fermeture') ?>
                </p>
                <p><?php the_field("style_")?></p> 
            </div>
            <br>
            <div class="cover-date">
                <p> <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?></p>
            </div>
            <hr>
            <h1 class="h1-concert-page"><?php the_title()?></h1>
            <hr>
            <p>Line up: </p>
            <p>
                <?php while( have_rows('line_up') ) : the_row(); ?>
                    <?php the_sub_field('heure_debut') ?> - <?php the_sub_field('heure_fin') ?> : <?php the_sub_field('nom_artiste') ?> <br>
                <?php endwhile; ?>
            </p>
            <hr>
            <p><?php the_content()?></p>

            <a class="cta-b" href="#">Reservation</a></>
            <div id="suivre-artiste">
                <p>Suivre l'artiste</p>
                <hr>
                <?php while( have_rows('reseaux_sociaux') ) : the_row(); ?>
                        <a href="<?php the_sub_field('url')  ?>" target="_blank">
                            <?php the_sub_field('choix_reseaux')  ?>
                        </a>
                    <?php endwhile; ?>
            </div>
        </div>
        <?php $photo = get_field('photo_artiste') ?>
        <img src="<?php echo $photo['sizes']['large'] ?>" alt="<?php echo $photo['alt'] ?>" />
    </div>

    <div class="position-ytb"><?php the_field("ytb")?></div>

    <section>
        <h2 class="h2-concert-page">PREMIERE PARTIE</h2>
        <hr>
    </section>
    <section>
        <?php while( have_rows('line_up') ) : the_row(); ?>
                    <?php the_sub_field('heure_debut') ?> - <?php the_sub_field('heure_fin') ?> : <?php the_sub_field('nom_artiste') ?> <br>
        <div>
            <div class="cover-date">
                <h3 class="h3-concert-page"><?php the_sub_field('nom_artiste') ?>
                </h3>
                <p><?php the_sub_field('heure_debut') ?>-<?php the_sub_field('heure_fin') ?></p>
            </div>
            <hr>
            <p><?php the_sub_field('description') ?></p>
            </div>
            <div id="suivre-artiste">
                <p>Suivre l'artiste</p>
                <hr>
                <?php while( have_rows('reseaux_sociaux') ) : the_row(); ?>
                    <a href="<?php the_sub_field('url')  ?>"  target="_blank">
                        <?php the_sub_field('choix_reseaux')  ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    </section>

    <!-- Vous aimeriez peut être--------------------------------------->
    <div id="background-aimeriez">
    <section class="container prochainement">
        <hr />
        <h2>Vous aimeriez peut être</h2>
    </section>

    <!-- Proposition d'artiste--------------------------------------->
    <section id="prochain-artiste" class="container">
        <div>
            <?php $args = array(
							'post_type' => 'concert',
							'posts_per_page' => 3,
							'meta_key'  => 'date',
							'offset'    => 1,
							'orderby'   => 'meta_value_num',
							'order'     => 'ASC',
						);
				
				$concertsAVenir = new WP_Query($args);
				
				if ( $concertsAVenir->have_posts() ) :
					while ( $concertsAVenir->have_posts() ) : $concertsAVenir->the_post(); ?>

            <div class="cont-artiste-2">
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
                        <p>Techno</p>
                    </div>

                    <hr class="hr-desc" />

                    <h3><?php the_title() ?><br />
                        <span><?php the_field('premiere-partie') ?></span>
                    </h3>

                    <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                </div>
            </div>
            <?php endwhile;
				endif;
				
				wp_reset_postdata(); ?>
        </div>
</section>
</div>
        <section>
            <div><a href="#" class="cta-prog-a">Programmation</a></div>

            <hr />
        
    </section>

</main>
<?php
get_footer();