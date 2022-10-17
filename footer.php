<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le-grabuge
 */

?>

<footer>
    <!-- Newsletter--------------------------------------->
    <section id="newsletter">
        <div>
            <h2>Newsletter</h2>
            <p>Inscriver vous à notre news letter pour ne rater aucune information sur notre programmation et bien
                d’autres choses. 10 % de réduction sur votre premiere visite chez nous en vous inscrivant.</p>
            <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
        </div>
    </section>
    <div>
        <nav id="mentionfooter">
            <?php wp_nav_menu( array(
					'theme_location' => 'menu-principal',
					'container' => '',
					'menu_class' => '',
					)
				) ?>
        </nav>
    </div>

    <div>
        <nav id="mentionfooter">
            <?php wp_nav_menu( array(
					'theme_location' => 'menu-secondaire',
					'container' => '',
					'menu_class' => '',
					)
				) ?>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>