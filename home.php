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
		<h1><?php the_archive_title() ?></h1>
		<div class="grilleActu">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
				<div class="actualite">

				</div>
			<?php endwhile;

			the_posts_navigation();
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
