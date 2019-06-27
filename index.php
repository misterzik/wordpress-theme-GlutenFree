<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>


	<div id="primary" class="content-area">
  	<main id="main" class="site-main" role="main">

			<!-- Desktop -->
			<div class="row hide-on-med-and-down">
				<?php
	      		$args = array('post_type' => 'sticky_news_init', 'posts_per_page' => 10);
	          $loop = new WP_Query($args);
	          while ($loop->have_posts()) : $loop->the_post();
	      ?>
		 		<div class="col m4">
     			<div class="indexTitle">
		    		<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('500', array('class' => 'circle responsive-img'));
										echo '<br />';
										the_title();  ?>
			  		</a>
					</div>
					<div class="indexContent">
			  			<div class="indexText">
							<?php the_excerpt(); ?>
						</div>
			 		</div>
		  		</div>
				<?php endwhile; ?>
				</div>
				<!-- Mobile -->

				<div class="row hide-on-large-only">
					<?php
							$args = array('post_type' => 'sticky_news_init', 'posts_per_page' => 10);
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
							<?php //the_excerpt();
										the_post_thumbnail('500', array('class' => 'circle responsive-img')); ?>
						</div>
						</div>
						<?php endwhile; ?>
					</div>
		 </main><!-- #main -->
	</div>

<?php
get_footer();
?>
