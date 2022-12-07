<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="detailConcert">
<div>
    <p>
        <?php 
            $dateFR = strtotime( get_field('date') );
            echo date_i18n( "j M Y", $dateFR ); ?>
            </p></div>
           <div><p><?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
    </p></div>
    <hr>
    <h4><?php the_title() ?></h4>
    <a href="<?php the_permalink() ?>">En savoir plus</a>
</div>