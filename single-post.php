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
	<main class="container">
		<div class="width-thumbnail">
			<?php the_post_thumbnail()?>
		</div>

		<section class="container-contenu">
			<h1><?php the_title()?></h1>
			<hr>
			<?php the_content()?>
		</section>



    <!-- Partie article--------------------------------------->
  
    <section class="cta-prog">
		<hr>
		<?php yarpp_related() ?>
        <div><a href="#">Plus d’article</a></div>
    </section>





	</main><!-- #main -->

<?php
get_footer();
