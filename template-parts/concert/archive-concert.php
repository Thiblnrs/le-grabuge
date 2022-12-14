<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" <?php post_class('detailConcert'); ?>>
        <div class="bg-gris">
        <div>
            <p> 
                <?php 
                $dateFR = strtotime( get_field('date') ); echo date_i18n( "j M Y", $dateFR ); ?> 
            </p>
            <p>
                <?php $genre = get_the_term_list( $post->ID, 'genre', '', ' - ', '' ); $genre = strip_tags( $genre );
                            echo $genre ?>
            </p>
            <p>
                <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
            </p>
          </div>

            <hr class="hr-desc" />
            <h4><?php the_title() ?> <br>
             <span><?php while( have_rows('line_up') ) : the_row(); ?>
                    <?php the_sub_field('nom_artiste') ?><br>
                <?php endwhile; ?></span> 
            </h4>
            <div class="cta-esp">
                <a href="<?php the_permalink() ?>">En savoir plus</a>
            </div>
            <div class="cta-b">
                <a href="<?php the_field('billeterie')?>">Billetterie</a>
            </div>
        </div>
</div>