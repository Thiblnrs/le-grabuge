<?php
/**
 * le-grabuge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package le-grabuge
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function le_grabuge_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on le-grabuge, use a find and replace
		* to change 'le-grabuge' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'le-grabuge', get_template_directory() . '/languages' );

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
			'menu-principal' => esc_html__( 'Menu principal', 'le-grabuge' ),
			'menu-secondaire' => esc_html__( 'Menu secondaire', 'le-grabuge' ),
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
			'le_grabuge_custom_background_args',
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
add_action( 'after_setup_theme', 'le_grabuge_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function le_grabuge_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'le_grabuge_content_width', 640 );
}
add_action( 'after_setup_theme', 'le_grabuge_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function le_grabuge_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'le-grabuge' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'le-grabuge' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'le_grabuge_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function le_grabuge_scripts() {
	wp_enqueue_style( 'le-grabuge-style',  get_template_directory_uri().'/assets/css/style.min.css' );
	wp_enqueue_style ( "font-awesome",  get_template_directory_uri().'/assets/font-awesome/css/all.min.css');
	
	wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/script/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/script/main.js', array('jquery'), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'le_grabuge_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Retirer les pr??fixes sur les pages d'archives */
function wp_retirer_prefix_dans_archives() {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'wp_retirer_prefix_dans_archives');

// Trier concert par date ACF
add_action( 'pre_get_posts', 'ptc_customize_wp_query', 10 );

/**
 * Sorts portfolio project posts by most recent start date.
 *
 * @param \WP_Query $query The WP_Query instance (passed by reference).
 */
function ptc_customize_wp_query( $query ) {
	if ( $query->is_post_type_archive( 'concert' ) ) {
		// Sort portfolio posts by project start date.
		$query->set( 'order', 'ASC' );
		$query->set( 'orderby', 'meta_value_num' );
		// ACF date field value is stored like 20220328 (YYYYMMDD).
		$query->set( 'meta_key', 'date' );
	}
}

//Supprimer mise en forme CF7
add_filter('wpcf7_autop_or_not','__return_false');