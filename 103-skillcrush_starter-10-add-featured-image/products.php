 <?php
/**
* The default template for displaying content on the blog page
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Skillcrush_Starter
* @since Skillcrush Starter 2.0
*/
?>

<div class="product">
				<figure>
					<?php the_post_thumbnail('full'); ?>
                    <p class="figure-title"><?php the_title(); ?></p>
                    <?php the_excerpt(); ?>

				</figure>

                </div>
