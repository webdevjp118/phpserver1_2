<?php
/**
 * pokernews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pokernews
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
function pokernews_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pokernews, use a find and replace
		* to change 'pokernews' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pokernews', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pokernews' ),
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
			'pokernews_custom_background_args',
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
add_action( 'after_setup_theme', 'pokernews_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pokernews_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pokernews_content_width', 640 );
}
add_action( 'after_setup_theme', 'pokernews_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pokernews_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pokernews' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pokernews' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pokernews_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pokernews_scripts() {
	wp_enqueue_style( 'pokernews-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pokernews-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pokernews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pokernews_scripts' );

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

/******************************************************************************/

add_action( 'after_setup_theme', 'custom_setup_theme' );
function custom_setup_theme() {
	$new_page_list = [
		'top',
		'news',
		'schedule',
		'schedule-upcoming',
		'schedule-past',
		'live-events',
		'events-past',
		'events-upcoming',
		'live-reporting',
		'reporting-past',
		'reporting-upcoming',
		'ranking',
		'contact-sample',
	];
	foreach($new_page_list as $page_slug) {
		$new_page = array(
				'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
				'post_title'    => $page_slug,	// Title of the Content
				'post_status'   => 'publish',			// Post Status
				'post_name'     => $page_slug			// Slug of the Post
		);
		if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
				$new_page_id = wp_insert_post($new_page);
		}
	}

	// for($i=0;$i<10;$i++) {
	// 	$new_page = array(
	// 		'post_type'     => 'reporting', 				// Post Type Slug eg: 'page', 'post'
	// 		'post_title'    => 'タイトルテキストがあります。タイトルテキストがあります。タイトルテキストがあります。',	// Title of the Content
	// 		'post_content' => '内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。',
	// 		'post_status'   => 'publish',			// Post Status
	// 		'post_name'     => 'post'.$i			// Slug of the Post
	// 	);
	// 	wp_insert_post($new_page);
	// }	
}	

function get_thumb_url($post_id, $default_empty = true) {
	$thumb_url = "";
	$thumb_id = get_post_thumbnail_id($post_id); //get the featured image
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	if(!empty($thumb_url_array)) {
		$thumb_url = $thumb_url_array[0];
	}
	if(strpos($thumb_url, "default.png") !== false){
		$thumb_url = "";
	}
	if(empty($thumb_url) && $default_empty) {
		$thumb_url = get_stylesheet_directory_uri()."/images/empty.jpg";
	}
	return $thumb_url;
}	

add_action('save_post','save_live_reporting_callback');
function save_live_reporting_callback($post_id){
	if (get_post_type($post_id) != 'reporting'){
        return;
    }
    $tour_id = get_field('tournament', $post_id);
	if(empty($tour_id)) {
		return;
	}
	update_field('start_event_date', get_field('start_event_date', $tour_id), $post_id);
	update_field('end_event_date', get_field('end_event_date', $tour_id), $post_id);
	update_field('game', get_field('game', $tour_id), $post_id);
}

// add_filter( 'wp_insert_post_data' , 'modify_post_content' , '99', 1 ); // Grabs the inserted post data so you can modify it.

// function modify_post_content( $data )
// {
//   if($data['post_type'] != 'post') {
// 	$and_base64 = base64_encode(' and ');
// 	$or_base64 = base64_encode(' or ');
// 	$original_content = $data['post_content'];
// 	$original_content = str_replace(' and ', $and_base64, $original_content);
// 	$original_content = str_replace(' or ', $or_base64, $original_content);

// 	$data['post_content'] = $original_content;
//   }
//   return $data; // Returns the modified data.
// }

// function replace_text($my_text){
// 	if(get_post_type(get_the_ID()) != 'post')
// 	{
// 		$and_base64 = base64_encode(' and ');
// 		$or_base64 = base64_encode(' or ');
// 		$my_text = str_replace( $and_base64, " and ", $my_text );
// 		$my_text = str_replace( $or_base64, " or ", $my_text );
// 	}
//     return $my_text;
// }
  
// add_filter('the_content', 'replace_text');

function get_top_events() {
	$tpevent_query = new WP_Query(array(
		'post_type' => 'tournament',
		'posts_per_page' => -1,
		'order'=>'DESC',
		'orderby'=>'meta_value',
		'meta_key'=>'start_event_date',
		'meta_query' => array(
			'relation' => 'AND',
			array(
				'key' => 'start_event_date',
				'value' => date( 'Ymdhis' ),
				'compare' => '<=',
				'type' => 'DATE'
			),
			array(
				'key' => 'end_event_date',
				'value' => date( 'Ymdhis' ),
				'compare' => '>',
				'type' => 'DATE'
			),
			array(
				'key' => 'start_event_date',
				'compare' => 'EXISTS',
			),
		)
	));
	$tpevent_ids = [];
	if ( $tpevent_query->have_posts() ) :
		while ( $tpevent_query->have_posts() ) :
			$tpevent_query->the_post();
			// $new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17.02'));
			// echo get_field('start_event_date', get_the_ID())." : ".date( 'Ymdhis' )." : ".get_field('end_event_date', get_the_ID())."<br><br><br>";
			$tploop_id = get_the_id();
			array_push($tpevent_ids, $tploop_id);
		endwhile;
	endif;
	wp_reset_query();
	return $tpevent_ids;
}

function event_date_cmp($a, $b) {
    if ($a['start'] == $b['start']) {
        return 0;
    }
    return ($a['start'] < $b['start']) ? -1 : 1;
}