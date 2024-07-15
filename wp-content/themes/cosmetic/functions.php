<?php
/**
 * cosmetic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cosmetic
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
function cosmetic_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cosmetic, use a find and replace
		* to change 'cosmetic' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cosmetic', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cosmetic' ),
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
			'cosmetic_custom_background_args',
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
add_action( 'after_setup_theme', 'cosmetic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cosmetic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cosmetic_content_width', 640 );
}
add_action( 'after_setup_theme', 'cosmetic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cosmetic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cosmetic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cosmetic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cosmetic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cosmetic_scripts() {
	wp_enqueue_style( 'cosmetic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cosmetic-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cosmetic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cosmetic_scripts' );

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



add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	// Add CSS in header
	wp_enqueue_style('uikit-rtl-min-css', get_template_directory_uri() . '/assets/css/uikit-rtl.min.css', array(), '5.11.2');
	wp_enqueue_style('uikit-rtl-css', get_template_directory_uri() . '/assets/css/uikit-rtl.css', array(), '5.11.2');
	wp_enqueue_style('uikit-min-css', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), '5.11.2');
	wp_enqueue_style('uikit-css', get_template_directory_uri() . '/assets/css/uikit.css', array(), '5.11.2');
	wp_enqueue_style('app-css-map', get_template_directory_uri() . '/assets/css/app-css-map.css', array(), '1.0.0');
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0');
	wp_enqueue_style('swiper-min-css', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0.0');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
	// Add JS in footer
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('uikit-min-js', get_template_directory_uri() . '/assets/js/uikit.min.js', array('jquery'), '3.5.5', true);
	wp_enqueue_script('uikit-js', get_template_directory_uri() . '/assets/js/uikit.js', array('jquery'), '3.5.5', true);
	wp_enqueue_script('uikit-icons-min-js', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array('jquery', 'uikit-min-js'), '3.5.5', true);
	wp_enqueue_script('uikit-icons-js', get_template_directory_uri() . '/assets/js/uikit-icons.js', array('jquery', 'uikit-js'), '3.5.5', true);
	wp_enqueue_script('amplitude-js', get_template_directory_uri() . '/assets/js/amplitude.js', array(), '1.0.0', true);
	wp_enqueue_script('amplitude-js-map', get_template_directory_uri() . '/assets/js/amplitude.js.map', array(), '1.0.0', true);
	wp_enqueue_script('swiper-min-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '3.5.1', true);
	wp_enqueue_script('functions-js', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);
}



// add options for header & footer
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);
register_nav_menus(
	array(
		'primary' => esc_html__('Primary menu', 'twentytwentyone'),
		'secondary'  => esc_html__('Secondary menu', 'twentytwentyone'),
		'main-menu' => esc_html__('Main menu', 'twentytwentyone'),
		'footer'  => esc_html__('Footer menu', 'twentytwentyone'),
		'header' => esc_html__('Header menu', 'twentytwentyone'),
	)
);



// SVG support media :-
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads'); 


function create_upcoming_events_post_type() {
    $labels = array(
        'name' => __('Upcoming Events'),
        'singular_name' => __('Upcoming Event'),
        'menu_name' => __('Upcoming Events'),
        'name_admin_bar' => __('Upcoming Event'),
        'add_new' => __('Add New'),
        'add_new_item' => __('Add New Event'),
        'new_item' => __('New Event'),
        'edit_item' => __('Edit Event'),
        'view_item' => __('View Event'),
        'all_items' => __('All Events'),
        'search_items' => __('Search Events'),
        'parent_item_colon' => __('Parent Events:'),
        'not_found' => __('No events found.'),
        'not_found_in_trash' => __('No events found in Trash.')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'upcoming-events'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('upcoming_events', $args);

    // Register Categories
    register_taxonomy('event_category', 'upcoming_events', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Event Categories'),
            'singular_name' => __('Event Category'),
            'search_items' => __('Search Event Categories'),
            'all_items' => __('All Event Categories'),
            'parent_item' => __('Parent Event Category'),
            'parent_item_colon' => __('Parent Event Category:'),
            'edit_item' => __('Edit Event Category'),
            'update_item' => __('Update Event Category'),
            'add_new_item' => __('Add New Event Category'),
            'new_item_name' => __('New Event Category Name'),
            'menu_name' => __('Event Categories'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'event-category'),
    ));

    // Register Tags
    register_taxonomy('event_tag', 'upcoming_events', array(
        'hierarchical' => false,
        'labels' => array(
            'name' => __('Event Tags'),
            'singular_name' => __('Event Tag'),
            'search_items' => __('Search Event Tags'),
            'all_items' => __('All Event Tags'),
            'edit_item' => __('Edit Event Tag'),
            'update_item' => __('Update Event Tag'),
            'add_new_item' => __('Add New Event Tag'),
            'new_item_name' => __('New Event Tag Name'),
            'menu_name' => __('Event Tags'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'event-tag'),
    ));
}

add_action('init', 'create_upcoming_events_post_type');


// Register custom post type
function my_custom_blog() {
  $labels = array(
    'name'               => _x( 'Blog', 'post type general name' ),
    'singular_name'      => _x( 'Blog', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Blog' ),
    'add_new_item'       => __( 'Add New Blog' ),
    'edit_item'          => __( 'Edit Blog' ),
    'new_item'           => __( 'New Blog' ),
    'all_items'          => __( 'All Blog' ),
    'view_item'          => __( 'View Blog' ),
    'search_items'       => __( 'Search Blog' ),
    'not_found'          => __( 'No Blog found' ),
    'not_found_in_trash' => __( 'No Blog found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Blog'
);
$args = array(
    'labels'        => $labels,
    'description'   => 'Blog',
    'public'        => true,
    'show_ui'        => true,
    'capability_type'  => 'post',
    'menu_position' => 5,
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes', 'excerpt'),
    'has_archive'   => true,
);
register_post_type( 'event', $args );
}
add_action( 'init', 'my_custom_blog' );