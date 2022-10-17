<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package le-grabuge
 */

get_header();
?>

		<main class="container">
			<h1>Programmation</h1>
		<div class="mois">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<?php  
					$date = get_field("date");

					// assuming your return format is "Ymd"
					$dateTime = DateTime::createFromFormat("Ymd", $date);

					if ( is_object($dateTime) ) {
						$mois = $dateTime->format('F');
					}
				?>

				<?php
					if ($mois == "October") :
				?>
					<h3 class="moisOctobre">Octobre</h3>
					<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="detailConcert">
						<p>
                            <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                        </p>
						<h4><?php the_title() ?></h4>
						<a href="<?php the_permalink() ?>">En savoir plus</a>
					</div>
				<?php elseif ($mois == "November") : ?>
					<h3 class="moisNovembre">Novembre</h3>
					<div>
						<?php the_title() ?>
					</div>
			<?php endif; endwhile;

			// the_posts_navigation();
		?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
