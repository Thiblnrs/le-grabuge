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
		<div id="detail-concert" class="container">
<div>
	<p>15 SEPT. 22</p>
	<p>Ouverture - 19.30</p>
	<hr>
	<h2>CHARLOTTE DEWITTE & FRIENDS</h2>
	<hr>
	<p>Line up : </p>
	<p>20.00 - 21.00 : Sam Paganini <br>
21.00 - 22.00 : Amelie Lens <br>
22.00 - 00.00 : Charlotte de witte</p>
	<hr>
	<p>Gantoise grandie sur la terre d'élection de la techno en Europe, Charlotte de Witte a 17 ans (à la fin de la dernière décennie) lorsqu'elle passe aux platines, où son absence de compromis lui permet de décrocher une émission hebdomadaire, Playground, sur Studio Brussels, et une résidence au Fuse, fameux club de la capitale belge.</p>

	<a class="cta-b" href="#">Reservation</a></>
</div>
		<img src="<?php the_field('photo_artiste') ?>" alt="">
		</div>
	</main>
<?php
get_footer();
