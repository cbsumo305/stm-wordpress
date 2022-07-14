<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Montserrat&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
  <script src="https://kit.fontawesome.com/d75254161e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
    <video playsinline autoplay muted loop>
      <source src="http://localhost/wordpress/wordpress/wp-content/uploads/2022/06/stm-landscape-supply-sod-drone-footage.mp4" type="video/mp4" />
    </video>

    <?php $promoArgs = array(
    'category_name' => 'news-and-promos',
    'post_status' => 'publish',
    'posts_per_page' => 1
) ?>

          <?php query_posts($promoArgs); ?>
             <?php while ( have_posts() ) : the_post(); ?>
             <div class="promo-banner">
               <?php get_template_part('promo-banner') ?>
               </div>


               
                <div class="popup">
                    <div class="popup-content flex-col">
                        <div class="close-popup">X</div>

                        <?php get_template_part('content',get_post_format()) ?>
        
                    </div>
                </div>

             <?php endwhile; ?> 
        <?php wp_reset_query(); ?>




    
	<header class="flex-row">

      <div class="menu-content menu-lg-screen">
        <div class="search-bar">
          <?php get_search_form(); ?>
        </div>

        <nav>
          <ul class="flex-row">
            <li><a href="#about">About</a></li>
            <li><a href="#products">Supplies</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>

      <div class="menu-content menu-small-screen flex-row">
        <p class="small-menu-label"><strong>MENU</strong></p>
        <div class="collapsing-menu collapsed">
          <nav>
            <ul class="flex-col">
              <li><a href="#">Back to Top</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#products">Supplies</a></li>
              <li><a href="#reviews">Reviews</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>

          <div class="header-social flex-row">
            <p><a href="https://www.facebook.com/STMsupply" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>
            <p><a href="https://www.instagram.com/stmsupply/" target="_blank"><i class="fa-brands fa-instagram"></i></a></p>
            <!--<p><a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>-->
          </div>


        </div>
      </div>

      <div class="menu-content header-logo">
        <a href="#">
          <figure>
            <img id="logo" alt="logo" src="http://localhost/wordpress/wordpress/wp-content/uploads/2022/06/white-stm-logo.png" />
          </figure>
        </a>
      </div>

      <div class="menu-content menu-lg-screen">
        <div class="header-contact">
          <a href="tel:251-586-8293" target="_blank"><i class="fa-solid fa-phone"></i></a> (251) 586-8293 | <a href="mailto:customerservice@stmsupply.com" target="_blank"><i class="fa-solid fa-envelope"></i></a> customerservice@stmsupply.com
        </div>

        <div class="header-social flex-row">
          <p><a href="https://www.facebook.com/STMsupply" target="_blank"><i class="fa-brands fa-facebook"></i></a></p>
          <p><a href="https://www.instagram.com/stmsupply/" target="_blank"><i class="fa-brands fa-instagram"></i></a></p>
        </div>


      </div>

      <div class="menu-content menu-small-screen flex-row contact-links">
        <p><a href="mailto:customerservice@stmsupply.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></p>
        <p><a href="tel:251-555-5555" target="_blank"><i class="fa-solid fa-phone"></i></a></p>
        <p class="mobile-search-icon"><i class="fa-solid fa-magnifying-glass"></i></p>
      </div>

      <div class="mobile-search-bar menu-small-screen collapsed">
        <?php get_search_form(); ?>
      </div>

    </header>


		<div id="main" class="site-main">
