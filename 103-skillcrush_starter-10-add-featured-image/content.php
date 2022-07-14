<?php
/**
* The default template for displaying content
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Skillcrush_Starter
* @since Skillcrush Starter 2.0
*
*
*
*
*
*
****   News & Promos displayed here!
*/
?>


<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail() ) : ?>
				<figure>
					<?php the_post_thumbnail('full'); ?>
				</figure>
			<?php endif; ?>
			<?php the_content(); ?>

