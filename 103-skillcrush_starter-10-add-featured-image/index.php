<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>



    <main class="flex-col">
      <section class="hero-area flex-col">
        <h1>STM Landscape Supply</h1>
        <p>
          Where quality meets reliability.
        </p>
      </section>

      <section id="about" class="about nav-section reveal">
        <div class="about-content">
          <h2>We are Mobile's best choice for landscaping and lawn care supplies.</h2>
          <p>
            With our expert knowledge and extensive experience, you'll have the best yard on the block!
          </p>
          <button class="btn meet-the-team">Meet the Team &nbsp; &nbsp;<i class="fa-solid fa-caret-down icon-down"></i></button>
        </div>


        <div id="staff" class="staff-box collapsed">

          <div class="flex-row staff-bios">

          <?php $staffArgs = array(
    'category_name' => 'Staff',
    'order' => 'ASC'
) ?>

          <?php query_posts($staffArgs); ?>
             <?php while ( have_posts() ) : the_post(); ?>
               <?php get_template_part('content-blog'); ?>
             <?php endwhile; ?> 
        <?php wp_reset_query(); ?>


          </div>

        </div>

      </section>

      <section id="products" class="nav-section reveal">
        <div class="best-sellers flex-col">


          <h2>Supplies</h2>
          <p>Take a look at our best sellers!</p>

          <div class="post-carousel">

          <?php query_posts("category_name=best-sellers-carousel"); ?>
          <?php while ( have_posts() ) : the_post(); ?>
                       <?php the_content() ?>
                     <?php endwhile; ?> 
          <?php wp_reset_query(); ?>

          </div>
        </div>


        <div class="flex-col products-header">
          <h2>
            <!--Supplies-->
            <i class="fa-solid fa-images active-view" title="Image view"></i>
            <i class="fa-solid fa-list-ul" title="List view"></i>
          </h2>
        </div>

        <div class="flex-col products-box">

          <div class="product-cat reveal">
            <h4>Sod <i class="fa-solid fa-caret-down icon-down"></i></h4>
            <div class="gallery-box collapsed">
              <div class="product-gallery">



                <?php query_posts("category_name=Sod&order=ASC&orderby=title"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php get_template_part('products', get_post_format()); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>

               

              </div>
            </div>
          </div>

          <div class="product-cat reveal">
            <h4>Bulk Materials <i class="fa-solid fa-caret-down icon-down"></i></h4>
            <div class="gallery-box collapsed">
              <div class="product-gallery">

              <?php query_posts("category_name=Bulk Materials&order=ASC&orderby=title"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php get_template_part('products', get_post_format()); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>

              </div>
            </div>
          </div>

          <div class="product-cat reveal">
            <h4>Chemicals & Fertilizer <i class="fa-solid fa-caret-down icon-down"></i></h4>
            <div class="gallery-box collapsed">
              <div class="product-gallery">

              <?php query_posts("category_name=chemicals-and-fertilizers&order=ASC&orderby=title"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php get_template_part('products', get_post_format()); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
               

              </div>
            </div>
          </div>

          <div class="product-cat reveal">
            <h4>Palm Trees & Plants <i class="fa-solid fa-caret-down icon-down"></i></h4>
            <div class="gallery-box collapsed">
              <div class="product-gallery">

              <?php query_posts("category_name=palm-trees-and-plants&order=ASC&orderby=title"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php get_template_part('products', get_post_format()); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>

               

              </div>
            </div>
          </div>

          <div class="product-cat hardscapes reveal">
            <h4>Hardscapes <i class="fa-solid fa-caret-down icon-down"></i></h4>
            <div class="gallery-box collapsed">
              <div class="product-gallery">
              <p style="width: 100%; text-align: center; margin: 15px 0;">We are Keystone and Rosetta Stone Authorized Dealers!</p>
              <?php query_posts("category_name=Hardscapes&order=ASC&orderby=title"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php get_template_part('products', get_post_format()); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
               

              </div>
            </div>
          </div>
          


        </div>
      </section>

      <section id="reviews" class="nav-section reveal">
         <div class="reviews-content flex-col">
          <h2>Providing the Highest Quality Products, with the Best Customer Experience.</h2>
          <p>
            Check out what they're saying about us! <br />
          </p>

          <?php echo do_shortcode( '[grw id="47472"]' ); ?>


          </div>
        </div>

      </section>

      <section id="contact" class="nav-section reveal">
        <h2>Contact</h2>

        <div class="contact-box flex-col">
          <div class="physical-info">

            <h3>Come on by!</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13701.395603272536!2d-88.0598366!3d30.8489053!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cbb2228bbc1ec85!2sSTM%20Landscape%20Supply%20LLC.!5e0!3m2!1sen!2sus!4v1653605402163!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-map"></iframe>

            <div class="address">
              <address>
                5471 Highway 43 Unit C & D <br />
                Satsuma, AL 36572 <br />
                (251) 586-8293
              </address>

              <div>
                <a href="https://www.google.com/maps/place/STM+Landscape+Supply+LLC./@30.8489053,-88.0598366,15z/data=!4m5!3m4!1s0x0:0x7cbb2228bbc1ec85!8m2!3d30.8489053!4d-88.0598366" target="_blank">
                  <div class="map-btn" title="See us on the map!"><i class="fa-solid fa-map-location-dot"></i></div>
                </a>
              </div>

              <div class="hours">
                <p>
                  <strong>Monday - Friday:</strong> 7:30AM–4:30PM <br />
                  <strong>Saturday: </strong> 7:30AM–12PM <br />
                  <strong>Sunday:</strong> Closed
                </p>

              </div>

            </div>




            <div class="email">
              <h4>Questions?</h4>
              <a href="mailto:customerservice@stmsupply.com">
                <div class="email-btn">
                  customerservice@stmsupply.com
                </div>
              </a>
              <div>
                <strong>Follow us!</strong>
                <div class="contact-social flex-row">
                  <p><a href="https://www.facebook.com/STMsupply" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>
                  <p><a href="https://www.instagram.com/stmsupply/" target="_blank"><i class="fa-brands fa-instagram"></i></a></p>
                  <!--<p><a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>-->
                </div>

              </div>

            </div>


          </div>

          <div class="quote-form flex-col">

          <h3>Get a Quote!</h3>

          <?php query_posts("category_name=Quote"); ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                       <?php the_content(); ?>
                     <?php endwhile; ?> 
                <?php wp_reset_query(); ?>

           
          </div>

        </div>

        <div class="help-links-box">
          <h3>Help Links</h3>

          <div class="help-links flex-col">
            <!--<div class="help-link">How to measure square footage</div>-->


            <a class="help-link" href="https://www.calculatorsoup.com/calculators/construction/square-footage-calculator.php" target="_blank">
              Calculate your square footage!
            </a>
            <a class="help-link" href="http://localhost/wordpress/wordpress/wp-content/uploads/2022/06/choose-the-right-sod.png" target="_blank">
              Which sod is best for you?
            </a>
          </div>


        </div>
      </section>


    </main>








<?php get_footer(); ?>

<script>

    //sticky header on scroll
    const headerOffset = document.getElementsByTagName("header")[0];
    const sticky = headerOffset.offsetTop;
    window.addEventListener('scroll', (event) => {

      if (window.pageYOffset > sticky) {
        $("header").addClass("sticky");
      } else {
        $("header").removeClass("sticky");
      }

    });


    //scroll animations!

    function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {

    console.log(reveals[i].id, elementTop, windowHeight)

      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);



    //collapsing mobile menu
    $(".small-menu-label").click(function () {
      $(".collapsing-menu").slideToggle();

      //collapse search
      $(".mobile-search-bar").slideUp();
    })

    //collapse mobile menu on menu item click
    $(".collapsing-menu li, .header-logo").click(function () {
      $(".collapsing-menu").slideUp();
    })

    //collapsing search bar
    $(".mobile-search-icon").click(function () {
      $(".mobile-search-bar").slideToggle();
      //collapse mobile menu as well
      $(".collapsing-menu").slideUp();
    })

    //collapsing staff
    $(".meet-the-team").click(function () {

      $(this).find(".icon-down").toggleClass("rotate");
      $("#staff").slideToggle();

    })

    //collapsing product-gallery
    $(".product-cat h4").click(function () {
      //if (screen.width < 1200) {
        $(this).closest(".product-cat").find(".gallery-box").slideToggle();
        
        $(this).find(".icon-down").toggleClass("rotate");
      //}
      
    })

    //changing product view
    $(".products-header i").click(function () {
      $(".products-header i").removeClass("active-view");
      $(this).addClass("active-view");

      //if list view, hide all images and expand all categories
      if ($(this).hasClass("fa-list-ul")) {
        $(".product-gallery img").hide();
        $(".product").width("100%");
        $(".hardscapes .product").addClass("illuminati");
        $(".gallery-box").slideDown();
        $(".product-cat .icon-down").addClass("rotate");
      } else { //if img view, show img and expand only first category
        $(".product-gallery img").show();
        //if desktop (width>1200px), expand everything and disable collapse?
        //if (screen.width < 1200) {
        $(".product").width("initial");
        $(".hardscapes .product").removeClass("illuminati");
          $(".product-cat").each(function () {
            if ($(this).index() == 0) {
              $(this).find(".gallery-box").slideDown();
              $(this).find(".icon-down").addClass("rotate");
            } else {
              $(this).find(".gallery-box").slideUp();
              $(this).find(".icon-down").removeClass("rotate");
            }
          })

        //}

      }
    })

    $(".promo-banner").click(function(){
        $("body").addClass("modal-open");
        $(".popup").fadeIn();
        $(".popup-content").animate({top: "100px"});
    })

    $(".close-popup").click(function(){

        $("body").removeClass("modal-open");
        $(".popup-content").animate({top: "100%"});
        $(".popup").fadeOut();
        

    })

    

  </script>
