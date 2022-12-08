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

	<main>

<div class="container">
    <section>
	<h1>LE GRABUGE C'EST QUOI ?</h1>
	<hr class="h1-hr">
	<img src="" alt="">
</section>

<section>
	<h2>NOTRE HISTOIRE</h2>
	<p>Nulla mollis interdum ante eu mattis. Sed facilisis tortor vehicula lacus malesuada, laoreet euismod erat aliquet.

 Ut cursus tincidunt ligula in imperdiet. Nunc sodales ultrices lorem nec ultrices. Vivamus finibus ipsum quam, eget rutrum nulla euismod et. Vivamus nulla nunc, lacinia et leo ut, viverra cursus lectus. Aenean mattis lacinia euismod. Donec condimentum dapibus volutpat. S

ed quis enim tristique, sagittis turpis eu, vestibulum metus. Nulla ornare mi orci, eget pulvinar quam interdum eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ultricies sagittis massa, et pellentesque velit elementum sit amet.
Curabitur rhoncus dui mattis venenatis placerat. Etiam condimentum sed arcu ac tempus. In et velit convallis, euism

od nunc nec, vestibulum felis. U
t ac neque et felis aliquet rhoncus. Nunc rutrum justo at ipsum lacinia, ac efficitur massa ultrices. Nam luctus ac enim et faucibus. Vivamus consequat orci nisl, vel laoreet risus interdum et. Fusce lobortis justo a erat pellentesque, vel pharetra nisi lacinia. Integer
 sed faucibus lectus.
</p>
	<hr>
</section>
<section id="apparition-photo">
	<h2>ILS VONT PASSER AU GRABUGE</h2>
    <ul>
        <li class="item-li" data-loc="laurent-garnier">LAURENT GARNIER - </li>
        <li class="item-li" data-loc="laurent-garnier">BRUTALISMUS3000 - </li>
        <li class="item-li" data-loc="laurent-garnier">THE BLOODY BEETROOTS - </li>
        <li class="item-li" data-loc="laurent-garnier">HI-LO - </li>
        <li class="item-li" data-loc="laurent-garnier">CASUAL GABBERZ - </li>
        <li class="item-li" data-loc="laurent-garnier">BILLX - </li>
        <li class="item-li" data-loc="laurent-garnier">DARKTEK - </li>
        <li class="item-li" data-loc="laurent-garnier">LNRS - </li>
        <li class="item-li" data-loc="laurent-garnier">VANDAL</li>
        <li class="item-li" data-loc="laurent-garnier">LEBASK -</li>
        <li class="item-li" data-loc="laurent-garnier">COONE -</li>
        <li class="item-li" data-loc="laurent-garnier">SEFA -</li>
        <li class="item-li" data-loc="laurent-garnier">AMELIE LENS  -</li>
        <li class="item-li" data-loc="laurent-garnier">VON BIKRAV -</li>
        <li class="item-li" data-loc="laurent-garnier">GARGANTUA -</li>
        <li class="item-li" data-loc="laurent-garnier">CHARLOTTE DE WITTE -</li>
        <li class="item-li" data-loc="laurent-garnier">REBEKKA WARRIOR -</li>
        <li class="item-li" data-loc="laurent-garnier">ALRT -</li>
        <li class="item-li" data-loc="laurent-garnier">JOYRIDE - </li>
        <li class="item-li" data-loc="laurent-garnier">APASHE -</li>
        <li class="item-li" data-loc="laurent-garnier">MANDIDEXTROUS - </li>
        <li class="item-li" data-loc="laurent-garnier">DEADMAU5 -</li>
        <li class="item-li" data-loc="laurent-garnier">SOLOMUM -</li>
        <li class="item-li" data-loc="laurent-garnier">BOYS NOIZE -</li>
        <li class="item-li" data-loc="laurent-garnier">MR OIZO -</li>
        <li class="item-li" data-loc="laurent-garnier">MISS KITTIN -</li>
        <li class="item-li" data-loc="laurent-garnier">JAUZ -</li>
        <li class="item-li" data-loc="laurent-garnier">MASSANE -</li>
        <li class="item" data-loc="laurent-garnier">JOYHAUSSER ...</li>
    </ul>

</section>
<section class="cta-prog">
	<hr>
	<h2>ENCORE PLUS D'INFO</h2>
	<div><a href="<?php echo home_url() ?>/infos-pratiques/">INFOS PRATIQUES</a></div>
</section>
</div>
<!-- SLIDE / SLICK--------------------------------------->
    <section id="diapo">
        <div class="multiple-items">
            <?php 
                $galeries = get_field('galerie');
                if( $galeries ): ?>
            <?php foreach( $galeries as $galerie ): ?>
            <img src="<?php echo esc_url($galerie['url']); ?>" alt="<?php echo esc_attr($galerie['alt']); ?>" />
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

	 <!-- citation--------------------------------------->
    <section id="citation">
        <?php 
            if( have_rows('citations') ):
                while( have_rows('citations') ) : the_row(); ?>
        <div>
            <p><?php the_sub_field('texte_citation') ?></p>
        </div>
        <?php   endwhile;
                else :
            endif;
        ?>
    </section>

    <!-- Raccourcis--------------------------------------->
    <nav id="raccourcis">
        <?php wp_nav_menu( array(
								'theme_location' => 'menu-principal',
								'container' => '',
								'menu_class' => '',
									)
								) ?>
    </nav>

	</main><!-- #main -->

<?php
get_footer();
