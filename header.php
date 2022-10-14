<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le-grabuge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
			<div>
				<?php the_custom_logo( ) ?>
				<h1>Le grabuge</h1>
			</div>
			<!--NAV--------------------------------------->
			<nav>
				<ul>
					<li><a href="#">Programmation</a></li>
					<li class="btn-menu"><a href="#">Menu</a></li>
					<li>Test Github</li>
				</ul>
			</nav>
			<div class="menu">
				<section id="fermer">
					<a href="#">Fermer</a>
				</section>

				<section id="menu-contenu">
					<div>
						<nav id="menu-principal">
							<ul>
								<li><a href="#">PROGRAMMATION</a></li>
								<li><a href="#">BILLETTERIE</a></li>
								<li><a href="#">ACTUALITE</a></li>
								<li><a href="#">A PROPOS</a></li>
								<li><a href="#">INFOS PRATIQUES</a></li>
								<li><a href="#">CONTACTS</a></li>
							</ul>
						</nav>
						<nav id="mention">
							<ul>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">Mentions légales</a></li>
								<li><a href="#">Espace pro</a></li>
								<li><a href="#">Politique de confidentialités</a></li>
								<li><a href="#">CGV</a></li>
								<li><a href="#">CGU</a></li>
							</ul>
						</nav>
					</div>
					<?php $args = array(
							'post_type' => 'concert',
							'posts_per_page' => 1,
							'meta_key'  => 'date',
							'orderby'   => 'meta_value_num',
							'order'     => 'ASC',
						);
				
				$concertsAVenir = new WP_Query($args);
				
				if ( $concertsAVenir->have_posts() ) :
					while ( $concertsAVenir->have_posts() ) : $concertsAVenir->the_post(); ?>
						
				<div class="cont-artiste-menu">
					<div>
						<img src="<?php the_field('photo_artiste') ?>" alt="" />
						<div class="cover-date-menu">
							<p>
								<?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
								<?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
							</p>
							<p>Techno</p>
						</div>

						<hr class="hr-desc" />

						<h3><?php the_title() ?><br />
						<span><?php the_field('premiere-partie') ?></span></h3>

						<div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
						<div class="cta-b"><a href="">Billetterie</a></div>
					</div>
				</div>
					<?php endwhile;
				endif;
				
				wp_reset_postdata(); ?>
				</section>
			</div>
		</header>
		<!--FIN HEADER--------------------------------------->
