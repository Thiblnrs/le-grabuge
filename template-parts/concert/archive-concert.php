<div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="detailConcert">
<div class="cover-date">
                        <?php 
								$dateFR = strtotime( get_field('date') );
							?>
                        <p>
                            <?php 
								$dateFR = strtotime( get_field('date') );
								echo date_i18n( "j M Y", $dateFR ); ?><br />
                            <?php the_field('heure_de_debut') ?> - <?php the_field('heure_de_fin') ?>
                        </p>
                        <p><?php the_field("style_")?></p>
                    </div>
                    <div class="cta-esp"><a href="<?php the_permalink() ?>">En savoir plus</a></div>
                    <div class="cta-b"><a href="#">Billetterie</a></div>
                </div>
            </div>
        </div>