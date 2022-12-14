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
            <a href="<?php echo home_url() ?>">
                <strong>Le grabuge</strong>
            </a>
        </div>
        <!--NAV--------------------------------------->
        <nav>
            <ul>
                <li><a href="<?php echo home_url()?>/programmation">Programmation</a></li>
                <li class="btn-menu"><a href="#">Menu</a></li>
            </ul>
        </nav>
        <div class="menu">
            <section id="fermer">
                <a href="#">Fermer</a>
            </section>

            <section id="menu-contenu">
                <div>
                    <nav id="menu-principal">
                        <?php wp_nav_menu( array(
								'theme_location' => 'menu-principal',
								'container' => '',
								'menu_class' => '',
									)
								) ?>
                    </nav>
                    <nav id="mention">
                        <?php wp_nav_menu( array(
								'theme_location' => 'menu-secondaire',
								'container' => '',
								'menu_class' => '',
									)
								) ?>
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

                <div class="cont-artiste-menu upermenu">
                    <div>
                        <?php $photo = get_field('photo_artiste') ?>
                        <img src="<?php echo $photo['sizes']['large'] ?>" alt="<?php echo $photo['alt'] ?>" />
                        <div class="cover-date-menu">
                            <p>
                                <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                                <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                            </p>
                            <p><?php $genre = get_the_term_list( $post->ID, 'genre', '', ' - ', '' ); $genre = strip_tags( $genre );
                            echo $genre ?></p>
                        </div>

                        <hr class="hr-desc" />

                        <h3><?php the_title() ?><br />
                            <span><?php while( have_rows('line_up') ) : the_row(); ?>
                                <?php the_sub_field('nom_artiste') ?><br>
                            <?php endwhile; ?></span> 
                        </h3>

                        <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                        <div class="cta-b"><a href="<?php the_field('billeterie')?>">Billetterie</a></div>
                    </div>
                </div>
                <?php endwhile;
				endif;
				
				wp_reset_postdata(); ?>
            </section>
        </div>
    </header>
    <!--FIN HEADER--------------------------------------->