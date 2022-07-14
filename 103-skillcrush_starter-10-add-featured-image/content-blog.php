<?php
/**
* The default template for displaying content on the blog page
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
*************** STAFF!
*/
?>


            <div class="bio-box">
              <div class="front-bio flex-row">

                <div class="bio-name">
                  <h3>
                    <?php the_title(); ?>
                  </h3>
                  <?php echo the_excerpt(); ?>
                </div>


                <div class="bio-content">
         

				  <?php if ( has_post_thumbnail() ) : ?>
				<figure>
					<?php the_post_thumbnail('full'); ?>
				</figure>
			<?php endif; ?>
			

                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>

              </div>


              <div class="bio-bg"></div>
            </div>




             



