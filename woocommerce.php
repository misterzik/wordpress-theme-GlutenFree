<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package glutenfree
 */

get_header();
//include "header-woo.php"
;?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="row">

       <div class="col l9">
				   <?php woocommerce_content(); ?>
        </div>

        <div class="col l3">
          <?php get_sidebar();?>
        </div>


		  </div><!-- #primary -->
    </main><!-- #main -->
  </div>



<?php get_footer();
