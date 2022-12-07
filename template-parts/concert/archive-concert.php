<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="detailConcert">
 <div class="cont-artiste">
                <div>
                    <?php $photo_artiste = get_field('photo_artiste') ?>
                    <img src="<?php echo $photo_artiste['sizes']['medium'] ?>"
                        alt="<?php echo $photo_artiste['alt'] ?>" />
                    <div class="cover-date">
                        <p>
                            <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                        </p>
                        <p><?php the_field("style_")?></p>
                    </div>

                    <hr class="hr-desc" />

                    <h3><?php the_title() ?><br />
                        <span><?php the_field('premiere-partie') ?></span>
                    </h3>

                    <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                    <div class="cta-b"><a href="">Billetterie</a></div>
                </div>
            </div>