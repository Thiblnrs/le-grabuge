<?php
/*
YARPP Template: Articles
Description: Template des articles.
Author: Thibault
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<!-- YARPP Thumbnails -->
<div>
            <?php the_post_thumbnail() ?>
            <h3><?php the_title() ?></h3>
            <?php the_excerpt() ?>
            <div class=" cta-esp"><a href="<?php the_permalink() ?>">En lire plus</a>
            </div>
        </div>
