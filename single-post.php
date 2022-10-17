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
	<main>
<div class="width-thumbnail">
	<?php the_post_thumbnail()?>
</div>

	<div>
<h1><?php the_title()?></h1>
	</div>

	</main><!-- #main -->

<?php
get_footer();
