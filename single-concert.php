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
    <div id="detail-concert">
        <div>
            <div class="cover-date">
                <p>
                    <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                    <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                </p>
                <p>Techno</p>
            </div>
            <br>
            <div class="cover-date">
                <p>Ouverture - 19.30</p>
                <p>Fermeture - 19.30</p>
            </div>
            <hr>
            <h1 class="h1-concert-page"><?php the_title()?></h1>
            <hr>
            <p>Line up : </p>
            <p>20.00 - 21.00 : Sam Paganini <br>
                21.00 - 22.00 : Amelie Lens <br>
                22.00 - 00.00 : Charlotte de witte</p>
            <hr>
            <p><?php the_content()?></p>

            <a class="cta-b" href="#">Reservation</a></>
        </div>
        <?php $photo = get_field('photo_artiste') ?>
        <img src="<?php echo $photo['sizes']['large'] ?>" alt="<?php echo $photo['alt'] ?>" />
    </div>

    <div class="position-ytb"><?php the_field("ytb")?></div>

    <section>
        <h2 class="h2-concert-page">PREMIERE PARTIE</h2>
    </section>
    <section>
        <div>
            <div class="cover-date">
                <h3>Sam pagganie</h3>
                <p>21.00-22.00</p>
            </div>
            <hr>
            <p>Le DJ et producteur italien Sam Paganini balade depuis 2010 sa techno minimale à travers la planète et a
                sorti en 2014 un premier album intitulé "Satellite" qui gravite encore dans pas mal de têtes et de
                tables de mix à l'heure actuelle</p>
        </div>
    </section>

</main>
<?php
get_footer();