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
<main class=" container">
    <div id="titre-programmation">
        <h1><?php the_archive_title() ?></h1>
        <hr>
    </div>

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
        <h2 class="moisJanvier">Janvier</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "February") : ?>
        <h2 class="moisFevrier">Février</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "March") : ?>
        <h2 class="moisMars">Mars</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "April") : ?>
        <h2 class="moisAvril">Avril</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "May") : ?>
        <h2 class="moisMai">Mai</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "June") : ?>
        <h2 class="moisJuin">Juin</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "July") : ?>
        <h2 class="moisJuillet">Juillet</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "August") : ?>
        <h2 class="moisAout">Aout</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "September") : ?>
        <h2 class="moisSeptembre">Septembre</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "October") : ?>
        <h2 class="moisOctobre">Octobre</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "November") : ?>
        <h2 class="moisNovembre">Novembre</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php elseif ($mois == "December") : ?>
        <h2 class="moisDecembre">Décembre</h2>
        <?php get_template_part('template-parts/concert/archive-concert') ?>
        <?php endif; endwhile;

			// the_posts_navigation();
		?>
    </div>
</main><!-- #main -->

<?php

get_footer();