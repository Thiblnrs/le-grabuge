<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package le-grabuge
 */

get_header();
?>

	<main class="container">
<section>

<!------ CTA----->
	<h1>Nous contacter</h1>
	<hr>
</section>

<section>
<div>
<hr>
<h2>LE grabuge</h2>
<p>45 Rue Solferino
59000 Lille
03.21.45.86.59.
</p>
<button></button>
<hr>
<p>Envie d’en savoir plus sur le grabuge?</p>
<button></button>
<hr>
<p>A la recherche d’informations ?</p>
<button></button>
<hr>

</div>
<!------ FORMULAIRE CONTACT----->
<div>
	<?php echo do_shortcode( '[contact-form-7 id="363" title="Contactez nous"]' ); ?>
</div>
</section>

<!------ mail----->
<section>
	<h3>Direction ET PROGRAMMATION </h3>
<p>Francois Theret - Directeur Financier
f.theret(a)grabuge.com <br>
Thibault Llinares - Directeur artistique
t.llinares(a)grabuge.com</p>

<h3>ADMINISTRATION </h3>
<p>Gaëlle Lafait - Secrétaire
l.gaelle(a)grabuge.com</p>

<h3>COMMUNICATION </h3>
<p>
Julien Lahé
l.julien(a)grabuge.com - Chargé de communication <br>
Elise Penet
p.elise(a)grabuge.com - Chargé de communication</p>

<h3>PRODUCTION ET REGIE</h3>
<p>
Lucas Delhi
d.lucas(a)grabuge.com - Technique
<br>
Kevin Lanoix - Programmateur
l.kevin(a)grabuge.com</p>

<h3>BAR</h3>
<p>
Fernand Bar
b.fernand(a)grabuge.com - Chef d'équipe restauration</p></section>
	</main><!-- #main -->
<?php
get_footer();
