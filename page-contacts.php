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
 <section  class="container">
    <div id="detail-concert">
        <div>
            <div class="cover-date-concert">
                <p>
                   <span class="bold-date"> <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br /></span>
                    <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin')?>

                    <?php the_field('heure_douverture') ?> - 
                    <?php the_field('heure_de_fermeture') ?>
                </p>
                <p class="bold-date"><?php the_field("style_")?></p> 
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
            <p class="line-up-style">Line up :</p>
            <p>
                <?php while( have_rows('line_up') ) : the_row(); ?>
                    <?php the_sub_field('heure_debut') ?> - <?php the_sub_field('heure_fin') ?> : <?php the_sub_field('nom_artiste') ?> <br>
                <?php endwhile; ?>
            </p>
            <hr>
            <p><?php the_content()?></p>

            <a class="cta-b" href="#">Réservation</a></>
            <div id="suivre-artiste">
                <p>Suivre l'artiste</p>
                <hr class="hr-suivre-a">
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
	</main><!-- #main -->

<?php
get_footer();
