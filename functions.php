<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */

if ( ! function_exists( 'portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on portfolio, use a find and replace
		 * to change 'portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'portfolio' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'portfolio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_enqueue_style('portfolio-style', get_stylesheet_uri());

	wp_enqueue_script('portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	// Google Fonts
	wp_enqueue_style('portfolio-googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,800,900');

	// Font Awesome
	wp_enqueue_script('portfolio-fontawesomejs', get_template_directory_uri() . '/fonts/fontawesome/js/fontawesome-all.min.js', array(), '20180522', true);

	// ScrollTop
	wp_enqueue_script('portfolio-scrolltopjs', get_template_directory_uri() . '/js/scroll-top.js', array('jquery'), '20180430', true);

	// Navbar
	// wp_enqueue_script('portfolio-navbarjs', get_template_directory_uri() . '/js/navbar.js', array('jquery'), '20180527', true);

	// Isotope Filtering
 	// if(is_post_type_archive('project')){
			wp_enqueue_script('portfolio-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array( 'jquery' ), '4.1.4', true );
			wp_enqueue_script('portfolio-isotopesettings', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery'), 20180607, false );
			wp_enqueue_script('portfolio-isotope', get_template_directory_uri() . '/js/isotope-filters.js', array('portfolio-isotopesettings'), 20180518, false );
	// }

	if (is_singular() && comments_open() && get_option( 'thread_comments')) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

// adding multiple Isotope scripts
// function add_isotope() {
//     wp_register_script( 'isotope', get_template_directory_uri().'/js/isotope.js', array('jquery'),  true );
//     wp_register_script( 'isotope-init', get_template_directory_uri().'/js/isotope-filters.js', array('jquery', 'isotope'),  true );
//     // wp_register_style( 'isotope-css', get_stylesheet_directory_uri() . '/css/isotope.css' );
//
//     wp_enqueue_script('isotope-init');
//     // wp_enqueue_style('isotope-css');
// }
//
// add_action( 'wp_enqueue_scripts', 'add_isotope' );

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

/**
 * Add Custom Post Types & Taxonomies.
 */

// Projects CPT
function portfolio_register_custom_post_types() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Projects' ),
        'add_new_item'       => __( 'Add New Project' ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Project:' ),
        'not_found'          => __( 'No projects found.' ),
        'not_found_in_trash' => __( 'No projects found in Trash.' ),
        'archives'           => __( 'Project Archives'),
        'insert_into_item'   => __( 'Uploaded to this project'),
        'uploaded_to_this_item' => __( 'Project Archives'),
        'filter_item_list'   => __( 'Filter project list'),
        'items_list_navigation' => __( 'Project list navigation'),
        'items_list'         => __( 'Project list'),
        'featured_image'     => __( 'Project feature image'),
        'set_featured_image' => __( 'Set project feature image'),
        'remove_featured_image' => __( 'Remove project feature image'),
        'use_featured_image' => __( 'Use as project image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
        'menu_icon'          => 'dashicons-format-aside',
    );
    register_post_type( 'project', $args );
}

// Taxonomy
function portfolio_register_taxonomies() {

    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Project Categories' ),
        'all_items'         => __( 'All Project Categories' ),
        'parent_item'       => __( 'Parent Project Category' ),
        'parent_item_colon' => __( 'Parent Project Category:' ),
        'edit_item'         => __( 'Edit Project Category' ),
        'view_item'         => __( 'View Project Category' ),
        'update_item'       => __( 'Update Project Category' ),
        'add_new_item'      => __( 'Add New Project Category' ),
        'new_item_name'     => __( 'New Project Category Name' ),
        'menu_name'         => __( 'Project Category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-categories' ),
    );
    register_taxonomy( 'project-category', array( 'project' ), $args );

 }

 add_action( 'init', 'portfolio_register_taxonomies');


 add_action( 'init', 'portfolio_register_custom_post_types' );

 function portfolio_rewrite_flush() {
    portfolio_register_custom_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'portfolio_rewrite_flush' );

// function portfolio_disable_srcset( $sources ) {
//     return false;
// }
//
// add_filter( 'wp_calculate_image_srcset', 'portfolio_disable_srcset' );
