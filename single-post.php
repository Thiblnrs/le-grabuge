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

		<section>
			<h1><?php the_title()?></h1>
			<?php the_content()?>
		</section>


    <!-- Partie article--------------------------------------->
   <section class="container prochainement">
        <hr />
        <h3>Aticles similaires</h3>
    </section>

 <section id="articles">
        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>

        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>

        <div>
            <img src="img/photo-article.png" alt="" />
            <h4>Le street art s’invite à Lille et nous aussi.</h4>
            <p>A l’occasion de la journée mondial pour le street art, le grabuge a souhaité partager avec les artiste de
                la region...</p>
            <div class="cta-esp"><a href="">En lire plus</a></div>
        </div>
    </section>
    <section class="cta-prog">
        <div><a href="#">Plus d’article</a></div>
    </section>





	</main><!-- #main -->

<?php
get_footer();
