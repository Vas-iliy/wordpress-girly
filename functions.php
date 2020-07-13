<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'girly_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function girly_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on girly, use a find and replace
		 * to change 'girly' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'girly', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'head' => esc_html__( 'Head', 'girly' ),
				'headRight' => esc_html__( 'Head Right', 'girly' ),
				'foot' => esc_html__( 'Foot', 'girly' ),
				'footRight' => esc_html__( 'Foot Right', 'girly' ),
				'contact' => esc_html__( 'Contact', 'girly' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'girly_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'girly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function girly_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'girly_content_width', 640 );
}
add_action( 'after_setup_theme', 'girly_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function girly_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'girly' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'girly' ),
			'before_widget' => '<div class="s-12 m-6 l-3 xl-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-white text-strong">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Social', 'girly' ),
			'id'            => 'sidebar-soc',
			'description'   => esc_html__( 'Add widgets here.', 'girly' ),
		)
	);
}
add_action( 'widgets_init', 'girly_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function girly_scripts() {
	wp_enqueue_style( 'girly-style', get_stylesheet_uri());
	wp_enqueue_style('components-css', get_template_directory_uri() . '/assets/css/components.css');
	wp_enqueue_style('googleapis', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext');
	wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/css/icons.css');
	wp_enqueue_style('responsee-css', get_template_directory_uri() . '/assets/css/responsee.css');
	wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.css');
	wp_enqueue_style('lightcase-css', get_template_directory_uri() . '/assets/css/lightcase.css');
	wp_enqueue_style('template-style-css', get_template_directory_uri() . '/assets/css/template-style.css');
	wp_enqueue_style('woocommerce-css', get_template_directory_uri() . '/assets/css/woocommerce.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.8.3.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js');
	wp_enqueue_script('responsee-ui', get_template_directory_uri() . '/assets/js/responsee.js', array(), '', true);
	wp_enqueue_script('owl-carousel-ui', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), '', true);
	wp_enqueue_script('template-scripts-ui', get_template_directory_uri() . '/assets/js/template-scripts.js', array(), '', true);
	wp_localize_script('responsee-ui', 'lawData', array('themePath' => get_template_directory_uri()));

}
add_action( 'wp_enqueue_scripts', 'girly_scripts' );

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins',
	get_option('active_plugins')))) {

	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
}

/**
 * Rename "home" in breadcrumb
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
	// Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['home'] = '';
	$defaults['delimiter'] = '';

	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text', 20 );

// product Link
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);

//remove button
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

//hover cart
add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_product_title', 5);
add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_price', 10);
add_action( 'woocommerce_after_shop_loop_item','short_description', 15);
add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 20);

function short_description ()
{
	echo the_excerpt() . "<br>";
}


require get_template_directory() . '/inc/customizer.php';



