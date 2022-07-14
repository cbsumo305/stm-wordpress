<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>

    <footer>
      <div class="footer-content flex-col">
        <div class="subscribe">
          <h3>Subscribe!</h3>
          <p>Join our mailing list and stay in the loop!</p>
          <div class="flex-row">
            <?php get_sidebar(); ?>
          </div>


        </div>

        <div class="footer-social">
          <h3>Follow us!</h3>

          <div class="flex-row">
            <p><a href="https://www.facebook.com/STMsupply" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>

            <p><a href="https://www.instagram.com/stmsupply/" target="_blank"><i class="fa-brands fa-instagram"></i></a></p>
          </div>

        </div>

        <div class="copyright">
          Copyright &copy; 2022 STM Landscape Supply LLC - All Rights Reserved.
        </div>
      </div>

    </footer>


		</div><!-- #main -->

	<?php wp_footer(); ?>

</body>
</html>
