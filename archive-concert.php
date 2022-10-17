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

		<main>
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
					<div>
						<?php the_title() ?>
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
get_sidebar();
get_footer();
