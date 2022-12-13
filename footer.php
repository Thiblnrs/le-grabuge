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
        <div class="container">
            <h2 >Newsletter</h2>
            <div>
            <p>Inscrivez-vous à notre news letter pour ne rater aucune information sur notre  programmation et bien d’autres choses. 10 % de réduction sur votre premiere visite chez nous en vous inscrivant.</p>
            <?php echo do_shortcode('[mailpoet_form id="1"]') ?>
            </div>
        </div>
    </section>
       <!-- RS--------------------------------------->
       <Section class="rs-footer">
        <div>
<i class="fa-brands fa-facebook"></i>
<i class="fa-brands fa-instagram"></i></div>
       </Section>
    <!-- footer--------------------------------------->
    <section id="footer-nav">
        <div>
            <div class="flex-mention">
                <nav id="mentionfooter">
                    <?php wp_nav_menu( array(
					'theme_location' => 'menu-principal',
					'container' => '',
					'menu_class' => '',
					)
				) ?>
                </nav>



                <nav>
                    <?php wp_nav_menu( array(
					'theme_location' => 'menu-secondaire',
					'container' => '',
					'menu_class' => '',
					)
				) ?>
                </nav>
            </div>

            <div>
                <p>LE GRABUGE
                </p>
                <p>45 Rue Solferino</p>
                <p>59000 LILLE</p>
                <p>03.21.45.86.59.</p>
            </div>
        </div>
        </div>
    </section>
    <section class="footer-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/legrabug-footer.png" alt=""></section>
</footer>
<?php wp_footer(); ?>

</body>

</html>