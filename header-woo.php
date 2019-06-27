<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inDesign
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<script>
		 $(document).ready(function(){
		$(".button-collapse").sideNav();

		$('.brand-logo .tooltipped').hover(function (){
		  $('.tooltipped').tooltip({delay: 50});
		}, function() {
		      $('.tooltipped').tooltip('remove');
		  });

		  $('.materialboxed').materialbox();

		  $('.slider').slider({full_width: true});

		});
		</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inDesign' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	  <div class="navbar-fixed">
	  <nav style="background: #333;">
	    <div class="nav-wrapper">
	      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">&nbsp;&nbsp;&nbsp;<span class="logoIntro white-text"><a><img src="/eliquid/images/hoodfog-vape-small-banner-e-liquid.png" class="logo hvr-wobble-to-bottom-right" /></a></span>
			 </a>
	      <a href="#/" data-activates="menu-menu-2" class="button-collapse"><i class="material-icons">menu</i></a>

					<?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
													'container' => false,
													'menu_class' => 'right hide-on-med-and-down text-white',
													'depth'             => 2,
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>

									<?php
															wp_nav_menu( array(
																	'menu'              => 'primary',
																	'theme_location'    => 'primary',
																	'container' => false,
																	'menu_class' => 'side-nav text-white',
																	'depth'             => 2,
																	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
																	'walker'            => new wp_bootstrap_navwalker())
															);
													?>
	    </div>
	  </nav>
	</div>
	</header>

<div class="container-fluid siteHeader">
<div class="wrapper-minerva">
				<div class="container-minerva">
						<ul id="slider">
								<li style="display: none;"><img style="width: 100%;" src="http://hoodfog.com/wp-content/themes/inDesign/images/coffee-shop.jpg" /></li>
								</ul>

						<ul id="dots">
								<li class="active"></li>
						</ul>

				</div>
		</div>
	</div>


<!-- #site-navigation -->
	</header><!-- #masthead -->


	<div id="content" class="site-content">
