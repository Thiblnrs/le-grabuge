<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="detailConcert">
    <p>
        <?php 
            $dateFR = strtotime( get_field('date') );
            echo date_i18n( "j M Y", $dateFR ); ?><br />
        <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
    </p>
    <h4><?php the_title() ?></h4>
    <a href="<?php the_permalink() ?>">En savoir plus</a>
</div>