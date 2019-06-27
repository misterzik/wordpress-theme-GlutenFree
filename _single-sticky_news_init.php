<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package InDesign
 */

get_header(); ?>

<div class="row">

 <div class="col l9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<h3 class="indexInsideTitle"> E-liquid News</h3>
      		<div class="row hide-on-med-and-down">
            <?php
                $args = array('category_name' => 'e-liquid', 'posts_per_page' => 10);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
            ?>
      		 <div class="col m5">
           	<div class="indexTitle">
      		    <a href="<?php the_permalink(); ?>">
      				<?php  the_title();  ?>
      			  </a>
      			</div>

      			<div class="indexContent">
      			  <?php the_excerpt();
      				//the_post_thumbnail(); ?>
      			 </div>
      		  </div>
      		<?php endwhile; ?>
      		</div>

          <div class="row hide-on-large-only">
            <?php
                $args = array('category_name' => 'e-liquid', 'posts_per_page' => 10);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
            ?>
           <div class="col l12 mobileFull">
            <div class="indexTitle">
              <a href="<?php the_permalink(); ?>">
              <?php  the_title();  ?>
              </a>
            </div>

            <div class="indexContent">
              <?php the_excerpt();
              //the_post_thumbnail(); ?>
             </div>
            </div>
          <?php endwhile; ?>
          </div>

<hr />


<h3 class="indexInsideTitle"> Give Aways</h3>
      		<div class="row hide-on-med-and-down">
            <?php
                              $args = array('category_name' => 'free-give-away', 'posts_per_page' => 10);
                              $loop = new WP_Query($args);
                              while ($loop->have_posts()) : $loop->the_post();
                            ?>

      		 <div class="col m5">
           	<div class="indexTitle">
      		    <a href="<?php the_permalink(); ?>">
      				<?php  the_title();  ?>
      			  </a>
      			</div>

      			<div class="indexContent">
      			  <?php the_excerpt();
      				//the_post_thumbnail(); ?>
      			 </div>
      		  </div>
      		<?php endwhile; ?>
      		</div>

          <div class="row hide-on-large-only">
            <?php
                              $args = array('category_name' => 'free-give-away', 'posts_per_page' => 10);
                              $loop = new WP_Query($args);
                              while ($loop->have_posts()) : $loop->the_post();
                            ?>

      		 <div class="col l12 mobileFull">
           	<div class="indexTitle">
      		    <a href="<?php the_permalink(); ?>">
      				<?php  the_title();  ?>
      			  </a>
      			</div>

      			<div class="indexContent">
      			  <?php the_excerpt();
      				//the_post_thumbnail(); ?>
      			 </div>
      		  </div>
      		<?php endwhile; ?>
      		</div>


          <hr />


          <h3 class="indexInsideTitle"> Community News</h3>

                		<div class="row hide-on-med-and-down">
                      <?php
                                        $args = array('category_name' => 'community', 'posts_per_page' => 10);
                                        $loop = new WP_Query($args);
                                        while ($loop->have_posts()) : $loop->the_post();
                                      ?>
                		 <div class="col m5">
                     	<div class="indexTitle">
                		    <a href="<?php the_permalink(); ?>">
                				<?php  the_title();  ?>
                			  </a>
                			</div>

                			<div class="indexContent">
                			  <?php the_excerpt();
                				//the_post_thumbnail(); ?>
                			 </div>
                		  </div>
                		<?php endwhile; ?>
                		</div>

                    <div class="row hide-on-large-only">
                      <?php
                                        $args = array('category_name' => 'community', 'posts_per_page' => 10);
                                        $loop = new WP_Query($args);
                                        while ($loop->have_posts()) : $loop->the_post();
                                      ?>
                     <div class="col l12 mobileFull">
                      <div class="indexTitle">
                        <a href="<?php the_permalink(); ?>">
                        <?php  the_title();  ?>
                        </a>
                      </div>

                      <div class="indexContent">
                        <?php the_excerpt();
                        //the_post_thumbnail(); ?>
                       </div>
                      </div>
                    <?php endwhile; ?>
                    </div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

 <div class="col l3">
<?php
get_sidebar();
?>
</div>
</div>


<?php
get_footer();
?>
