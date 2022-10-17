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
				<?php if ($mois == "January") : ?>
					<h3 class="moisJanvier">Janvier</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "February") : ?>
					<h3 class="moisFevrier">Février</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "March") : ?>
					<h3 class="moisMars">Mars</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "April") : ?>
					<h3 class="moisAvril">Avril</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "May") : ?>
					<h3 class="moisMai">Mai</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "June") : ?>
					<h3 class="moisJuin">Juin</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "July") : ?>
					<h3 class="moisJuillet">Juillet</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "August") : ?>
					<h3 class="moisAout">Aout</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "September") : ?>
					<h3 class="moisSeptembre">Septembre</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "October") : ?>
					<h3 class="moisOctobre">Octobre</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "November") : ?>
					<h3 class="moisNovembre">Novembre</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
				<?php elseif ($mois == "December") : ?>
					<h3 class="moisDecembre">Décembre</h3>
					<?php get_template_part(('template-parts/concert/archive-concert.php')) ?>
			<?php endif; endwhile;

			// the_posts_navigation();
		?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
