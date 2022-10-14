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
                        <p>Techno</p>
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
                    <img src="<?php the_field('photo_artiste') ?>" alt="" />
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
                    <div class="cta-b"><a href="">Billetterie</a></div>
                </div>
            </div>
            <?php endwhile;
				endif;
				
				wp_reset_postdata(); ?>
        </div>

        <section class="cta-prog">
            <div><a href="#">Programmation complete</a></div>

            <hr />
        </section>
    </section>

    <!-- SLIDE / SLICK--------------------------------------->
    <section id="diapo">
        <div class="multiple-items">
            <img src="img/slick1.jpeg" alt="" />
            <img src="img/slick2.jpeg" alt="" />
            <img src="img/slick3.jpeg" alt="" />
            <img src="img/slick1.jpeg" alt="" />
            <img src="img/slick2.jpeg" alt="" />
            <img src="img/slick3.jpeg" alt="" />
            <img src="img/slick1.jpeg" alt="" />
            <img src="img/slick2.jpeg" alt="" />
            <img src="img/slick3.jpeg" alt="" />
        </div>
    </section>
    <!-- DESCRIPTION SALLE--------------------------------------->
    <section id="desc-salle">
        <div>
            <img src="img/grabuge-ext.jpg" alt="" />
            <div>
                <h4>Le grabuge c'est quoi?</h4>
                <p>Située sur Lille LE GRABUGE est une salle de spectacle dédiée au musique electronique.</p>
                <p>Retrouvez une line-up aux multiples sonoritées tous les Samedis soir de 20.00 à 00.00.</p>

                <div class="cta-bw"><a href="#">A propos</a></div>
            </div>
        </div>
    </section>

    <!-- Plus que des concerts titre--------------------------------------->
    <section class="container prochainement">
        <hr />
        <h2>Plus que des concerts</h2>
    </section>

    <!-- Plus que des concerts Articles--------------------------------------->

    <section id="articles">
        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>

        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>

        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>
    </section>
    <section class="cta-prog">
        <div><a href="#">Plus d’article</a></div>
    </section>

    <!-- Newsletter--------------------------------------->
    <section id="newsletter">
        <div>
            <h2>Newsletter</h2>
            <p></p>
            <p></p>
            <p></p>
            <hr />
            <div><a href="">S'inscrire</a></div>
        </div>
    </section>

    <!-- citation--------------------------------------->
    <section id="citation">
        <div>
            <p>« Sans aucun doute le grabuge va faire beaucoup de bruit»</p>
        </div>
        <div>
            <p>« Sans aucun doute le grabuge va faire beaucoup de bruit»</p>
        </div>
        <div>
            <p>« Sans aucun doute le grabuge va faire beaucoup de bruit»</p>
        </div>
        <div>
            <p>« Sans aucun doute le grabuge va faire beaucoup de bruit»</p>
        </div>
        <div>
            <p>« Sans aucun doute le grabuge va faire beaucoup de bruit»</p>
        </div>
    </section>

    <!-- Raccourcis--------------------------------------->
    <nav id="raccourcis">
        <ul>
            <li><a href="#">PROGRAMMATION</a></li>
            <li><a href="#">BILLETTERIE</a></li>
            <li><a href="#">ACTUALITE</a></li>
            <li><a href="#">A PROPOS</a></li>
            <li><a href="#">INFOS PRATIQUES</a></li>
            <li><a href="#">CONTACTS</a></li>
        </ul>
    </nav>
</main>
<?php
get_footer();