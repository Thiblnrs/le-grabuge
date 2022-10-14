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
	<><?php $dateFR = strtotime( get_field('date') );
			echo date_i18n( "j M Y", $dateFR ); ?><br />
            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?> <br>
	Ouverture - 19.30</p>
	<hr>
	<h2><?php the_title()?></h2>
	<hr>
	<p>Line up : </p>
	<p>20.00 - 21.00 : Sam Paganini <br>
21.00 - 22.00 : Amelie Lens <br>
22.00 - 00.00 : Charlotte de witte</p>
	<hr>
	<p><?php the_content()?></p>

	<a class="cta-b" href="#">Reservation</a></>
</div>
		<img src="<?php the_field('photo_artiste') ?>" alt="">
		</div>

<div class="position-ytb"><?php the_field("ytb")?></div>
	</main>
<?php
get_footer();
