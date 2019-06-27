<?php
/**
 * inDesign functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inDesign
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


if ( ! function_exists( 'inDesign_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inDesign_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on inDesign, use a find and replace
	 * to change 'inDesign' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'inDesign', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	//register_nav_menus( array(
	//	'primary' => esc_html__( 'Primary', 'inDesign' ),
	//) );

	register_nav_menus( array(
    		'primary' => __( 'Primary Menu', 'inDesign' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'inDesign_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'inDesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inDesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inDesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'inDesign_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inDesign_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inDesign' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">  ',
		'after_title'   => ' <i class="fa fa-heart widgetIcon"></i></h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inDesign' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title"><i class="fa fa-shopping-cart widgetIcon"></i>  ',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'inDesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inDesign_scripts() {
	wp_enqueue_style( 'inDesign-style', get_stylesheet_uri() );
	wp_enqueue_style( 'inDesign-bsstyle', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css');
	wp_enqueue_style( 'inDesign-fastyle', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'inDesign-Mastyle', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style( 'inDesign-minervacss', get_template_directory_uri() . '/inc/minervajs-custom/minerva.css');


	wp_enqueue_script( 'inDesign-jq', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), true );
	wp_enqueue_script( 'inDesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'inDesign-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'inDesign-bs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', array());
	wp_enqueue_script( 'inDesign-minerva', get_template_directory_uri() . '/inc/minervajs-custom/minerva.js', array(), true );
	
	//wp_enqueue_script( 'inDesign-bs', '', array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inDesign_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Creates Movie Reviews Custom Post Type
function sticky_news_init() {
    $args = array(
      'label' => 'Sticky Index Posts',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'gluten-free'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'sticky_news_init', $args );
}
add_action( 'init', 'sticky_news_init' );

function recipes_init() {
    $args2 = array(
      'label' => 'Chef Recipes',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
		'has_archive' => true,
        'rewrite' => array('slug' => 'recipes'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'recipes_init', $args2 );
}
add_action( 'init', 'recipes_init' );

// The Exceprt
/* Modify the read more link on the_excerpt() */

function et_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="teal lighten-5 waves-effect waves-light btn">Read More</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');

/* Login */
function my_loginlogo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url('. get_template_directory_uri() .'/images/insanen.png) !important;
    }
  </style>';
}
add_action('login_head', 'my_loginlogo');

function my_loginURL() {
    return 'http://insanen.com';
}
add_filter('login_headerurl', 'my_loginURL');

function my_loginURLtext() {
    return 'Insanen Themes';
}
add_filter('login_headertitle', 'my_loginURLtext');

function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login/login-style.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

function my_loginredrect( $redirect_to, $request, $user ) {
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    if( in_array('administrator', $user->roles)) {
      return admin_url();
    } else {
      return site_url();
    }
  } else {
      return site_url();
  }
}

add_filter('login_redirect', 'my_loginredrect', 10, 3);

function my_loginfooter() { ?>
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-6091911878727341"
     data-ad-slot="8207167710"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br />
    <p style="text-align: center; margin-top: 1em;">
    Applications by <a style="color: #4da28f; text-decoration: none;" target="_blank" href="http://insanen.com">Insanen Solutios</a>.
    </p>
<?php }
add_action('login_footer','my_loginfooter');

// woo
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

do_action( 'woocommerce_set_cart_cookies', TRUE );

// Set a minimum number of products requirement before checking out
add_action( 'woocommerce_check_cart_items', 'spyr_set_min_num_products' );

function spyr_set_min_num_products() {
	// Only run in the Cart or Checkout pages
	if( is_cart() || is_checkout() ) {
		global $woocommerce;

		// Set the minimum number of products before checking out
		$minimum_num_products = 5;
		// Get the Cart's total number of products
		$cart_num_products = WC()->cart->cart_contents_count;

		// Compare values and add an error is Cart's total number of products
	    // happens to be less than the minimum required before checking out.
		// Will display a message along the lines of
		// A Minimum of 20 products is required before checking out. (Cont. below)
		// Current number of items in the cart: 6	
		if( $cart_num_products < $minimum_num_products ) {
			// Display our error message
	        wc_add_notice( sprintf( '<strong>A Minimum of %s products is required before checking out.</strong>' 
	        	. '<br />Current number of items in the cart: %s.',
	        	$minimum_num_products,
	        	$cart_num_products ),
	        'error' );
		}
	}
}
