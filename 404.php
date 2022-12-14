<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package le-grabuge
 */

get_header();
?>

	<main class="container">

<section id="section404" class="error-404 not-found">
<img src="<?php echo get_template_directory_uri() ?>/assets/img/danny_big.webp" alt="">
<div>
<p>Vous êtes perdu ?</p>
<p>Pas de panique rendez-vous sur notre <a href="<?php echo home_url() ?>">page d'accueil</a></p></div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
