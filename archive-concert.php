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

				<p><?php echo $mois ?></p>
				

			<?php endwhile;

			// the_posts_navigation();
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
