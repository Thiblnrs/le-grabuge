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

	<main id="primary" class="site-main">

	<?php the_post_thumbnail()?>

	<div>
<h1><?php the_title()?></h1>


	</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'le-grabuge' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'le-grabuge' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
		?>

	</main><!-- #main -->

<?php
get_footer();
