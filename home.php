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
		<h1>Actualité</h1>
		<div class="grilleActu">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
				<div class="actualite">
					<div>
						<?php the_post_thumbnail() ?>
						<h4><?php the_title() ?></h4>
						<?php the_excerpt() ?>
						<div class=" cta-esp"><a href="<?php the_permalink() ?>">En lire plus</a>
						</div>
					</div>
				</div>
			<?php endwhile;

			the_posts_navigation();
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
