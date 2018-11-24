<?php
/**
 * THW functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package THW
 */

global $postNum;

if ( ! function_exists( 'thw_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thw_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on THW, use a find and replace
	 * to change 'thw' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'thw', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'thw' ),
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
	add_theme_support( 'custom-background', apply_filters( 'thw_custom_background_args', array(
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
add_action( 'after_setup_theme', 'thw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thw_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thw_content_width', 640 );
}
add_action( 'after_setup_theme', 'thw_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thw_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thw' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'thw' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'thw' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'thw' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'thw' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'thw' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'thw' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'thw' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'thw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thw_scripts() {
	wp_enqueue_style( 'thw-style', get_stylesheet_uri() );

	wp_enqueue_script( 'thw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'thw-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thw_scripts' );

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

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="prev-post"';
}
function posts_link_attributes_2() {
    return 'class="next-post"';
}


function my_get_the_post_navigation( $args = array() ) {
    $args = wp_parse_args( $args, array(
        'prev_text'          => '<i class="fa fa-chevron-left" aria-hidden="true"></i>Previous Post',
        'next_text'          => 'Next Post<i class="fa fa-chevron-right" aria-hidden="true"></i>',
        'in_same_term'       => false,
        'excluded_terms'     => '',
        'taxonomy'           => 'category',
        'screen_reader_text' => __( 'Post navigation' ),
    ) );
 
    $navigation = '';
 
    $previous = get_previous_post_link(
        '<div class="nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    $next = get_next_post_link(
        '<div class="nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = _navigation_markup( $previous . '<div class="nav-middle">Go back to Posts</div>' . $next, 'post-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}


function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/*
 * Split podcast title
 */
    function get_split_podcast_title($title) {
        $lines = explode(' ', $title);
        $output = false;
        $count = 0;

        foreach( $lines as $line ) {
            $count++;
            if ($count == 1)
               $output .= '<span class="podcast-number">' . $line . '</span>';
            else $output .= $line . " ";
        }

        echo $output;
    }

/*
 * Get podcast number class
 */
    function get_podcast_number_class($title) {
        $lines = explode(' ', $title);
        $output = false;
        $count = 0;
		$podcastNum = 1;

        foreach( $lines as $line ) {
            $count++;
            if ($count == 1) {
				$podcastNumStr = ltrim($line, '#');
				$podcastNum = (int)$podcastNumStr;
				$podcastNum = ($podcastNum % 6) + 1;
			}
        }

        if ($podcastNum < 1 or $podcastNum > 6) 
			$podcastNum = 1;
		
        echo $podcastNum;
    }