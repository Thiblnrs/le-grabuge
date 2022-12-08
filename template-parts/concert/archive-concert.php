<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" <?php post_class('detailConcert'); ?>>
        <div class="bg-gris">
        <div>
            <p>
                <?php 
                    $dateFR = strtotime( get_field('date') );
                    echo date_i18n( "j M Y", $dateFR ); ?><br />
            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
            </p>
            <p><?php the_field("style_")?></p></div>

            <hr class="hr-desc" />
            <h4><?php the_title() ?> <br>
              <span> - <?php while( have_rows('line_up') ) : the_row(); ?>
                    <?php the_sub_field('nom_artiste') ?> -
                <?php endwhile; ?></span>
            </h4>
            <div class="cta-esp">
                <a href="<?php the_permalink() ?>">En savoir plus</a>
            </div>
            <div class="cta-b">
                <a href="">Billetterie</a>
            </div>
        </div>
</div>