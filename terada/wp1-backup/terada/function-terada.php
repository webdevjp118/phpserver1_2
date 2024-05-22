<?php
/**
 * Twenty Thirteen functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see https://codex.wordpress.org/Theme_Development
 * and https://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * Set up the content width value based on the theme's design.
 *
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 604;

/**
 * Add support for a custom header image.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Twenty Thirteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6-alpha', '<' ) )
	require get_template_directory() . '/inc/back-compat.php';

/**
 * Twenty Thirteen setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Thirteen supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_setup() {
	/*
	 * Makes Twenty Thirteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'twentythirteen', get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentythirteen_fonts_url() ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'twentythirteen_setup' );

/**
 * Return the Google font stylesheet URL, if available.
 *
 * The use of Source Sans Pro and Bitter by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function twentythirteen_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'twentythirteen' );

	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$bitter = _x( 'on', 'Bitter font: on or off', 'twentythirteen' );

	if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds Masonry to handle vertical alignment of footer widgets.
	if ( is_active_sidebar( 'sidebar-1' ) )
		wp_enqueue_script( 'jquery-masonry' );

	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );

	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentythirteen-fonts', twentythirteen_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.03' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'twentythirteen-style', get_stylesheet_uri(), array(), '2013-07-18' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentythirteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentythirteen-style' ), '2013-07-18' );
	wp_style_add_data( 'twentythirteen-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function twentythirteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );

/**
 * Register two widget areas.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );

if ( ! function_exists( 'twentythirteen_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentythirteen' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'twentythirteen_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
*
* @since Twenty Thirteen 1.0
*/
function twentythirteen_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'twentythirteen' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		twentythirteen_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

if ( ! function_exists( 'twentythirteen_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own twentythirteen_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function twentythirteen_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'twentythirteen' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'twentythirteen' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

if ( ! function_exists( 'twentythirteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Twenty thirteen 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentythirteen_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( reset( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string The Link format URL.
 */
function twentythirteen_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

if ( ! function_exists( 'twentythirteen_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 * and a Continue reading link.
 *
 * @since Twenty Thirteen 1.4
 *
 * @param string $more Default Read More excerpt link.
 * @return string Filtered Read More excerpt link.
 */
function twentythirteen_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentythirteen_excerpt_more' );
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * 3. When avatars are disabled in discussion settings.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentythirteen_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';

	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';

	return $classes;
}
add_filter( 'body_class', 'twentythirteen_body_class' );

/**
 * Adjust content_width value for video post formats and attachment templates.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_content_width() {
	global $content_width;

	if ( is_attachment() )
		$content_width = 724;
	elseif ( has_post_format( 'audio' ) )
		$content_width = 484;
}
add_action( 'template_redirect', 'twentythirteen_content_width' );

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function twentythirteen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'twentythirteen_customize_register' );

/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JavaScript handlers to make the Customizer preview
 * reload changes asynchronously.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize_preview_js() {
	wp_enqueue_script( 'twentythirteen-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'twentythirteen_customize_preview_js' );


// 管理バー消す
add_filter( 'show_admin_bar', '__return_false' );

// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
	'name' => __( 'Side - Recent posts' ),
	'id' => 'side_widget_recent',
	'description' => __( '最近の投稿ウィジェットエリア' ),
	'before_widget' => '<div class="widget-container">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => __( 'Side - Archive' ),
	'id' => 'side_widget_archive',
	'description' => __( 'アーカイブウィジェットエリア' ),
	'before_widget' => '<div class="widget-container">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => __( 'Side - Category' ),
	'id' => 'side_widget_category',
	'description' => __( 'カテゴリーウィジェットエリア' ),
	'before_widget' => '<div class="widget-container">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );


// 投稿画像にクラス名を与える
//add_filter('image_send_to_editor', 'remove_img_attr');
//function remove_img_attr( $html ) {
//	$class = 'post_img';
//	$rels = 'colorbox';
//	return str_replace( '<a ', '<a class="'. $class. '" ', $html );
//	return str_replace( '<a ', '<a class="'. $class. '" rel="'. $rels. '" ', $html );
//}


// 投稿内やウィジェットにインクルードファイルのショートコードを張る 2014.05.23
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


// カスタム投稿タイプ  
function my_custom_init()
{
	$labels = array(
    	'name' => _x('採用情報', 'post type general name'),
    	'singular_name' => _x('採用情報', 'post type singular name'),
    	'add_new' => _x('採用情報を新規追加', 'job'),
    	'add_new_item' => __('採用情報追加'),
    	'edit_item' => __('採用情報を編集'),
    	'new_item' => __('新しい採用情報'),
    	'view_item' => __('採用情報を表示'),
    	'search_items' => __('採用情報を探す'),
    	'not_found' =>  __('採用情報が見つかりません'),
    	'not_found_in_trash' => __('ゴミ箱に採用情報投稿はありません'),
    	'parent_item_colon' => ''
  	);
  	$args = array(
    	'labels' => $labels,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => false,
    	'menu_position' => 5,
    	'supports' => array('title','editor'),
    	'has_archive' => true
  	);
  	//カスタム投稿タイプを登録
  	register_post_type('job',$args);

  	//カテゴリータイプ
  	$args = array(
		'label' => '採用種別',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => true
  	);
  	register_taxonomy('job_category','job',$args);
  
	// 施工実績
	$labels2 = array(
    	'name' => _x('施工実績', 'post type general name'),
    	'singular_name' => _x('施工実績', 'post type singular name'),
    	'add_new' => _x('施工実績を新規追加', 'cases'),
    	'add_new_item' => __('施工実績追加'),
    	'edit_item' => __('施工実績を編集'),
    	'new_item' => __('新しい施工実績'),
    	'view_item' => __('施工実績を表示'),
    	'search_items' => __('施工実績を探す'),
    	'not_found' =>  __('施工実績が見つかりません'),
    	'not_found_in_trash' => __('ゴミ箱に施工実績投稿はありません'),
    	'parent_item_colon' => ''
  	);
  	$args2 = array(
    	'labels' => $labels2,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => false,
    	'menu_position' => 5,
    	'supports' => array('title','editor'),
    	'has_archive' => true
  	);
  	//カスタム投稿タイプを登録
  	register_post_type('cases',$args2);

  	//カテゴリータイプ
  	$args_cases = array(
		'label' => '事例種別',
		'public' => true,
		'show_ui' => true,
		'hierarchical' => true
  	);
  	register_taxonomy('cases_category','cases',$args_cases);
  
	// TERADABLOG
	$labels3 = array(
    	'name' => _x('WEB連載', 'post type general name'),
    	'singular_name' => _x('WEB連載', 'post type singular name'),
    	'add_new' => _x('WEB連載を新規追加', 'blog'),
    	'add_new_item' => __('WEB連載追加'),
    	'edit_item' => __('WEB連載を編集'),
    	'new_item' => __('新しいWEB連載'),
    	'view_item' => __('WEB連載を表示'),
    	'search_items' => __('WEB連載を探す'),
    	'not_found' =>  __('WEB連載が見つかりません'),
    	'not_found_in_trash' => __('ゴミ箱にWEB連載投稿はありません'),
    	'parent_item_colon' => ''
  	);
  	$args3 = array(
    	'labels' => $labels3,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => false,
    	'menu_position' => 5,
    	'supports' => array('title','editor'),
    	'has_archive' => true
  	);
  	//カスタム投稿タイプを登録
  	register_post_type('blog',$args3);

  	// タクソノミー
	$args_blog = array(
	   'label' => 'カテゴリー',
	   'public' => true,
	   'show_ui' => true,
	   'hierarchical' => true
    );
    register_taxonomy('blog_category','blog',$args_blog);

	// diary　ダイアリー
	$labels4 = array(
    	'name' => _x('ダイアリー', 'post type general name'),
    	'singular_name' => _x('ダイアリー', 'post type singular name'),
    	'add_new' => _x('ダイアリーを新規追加', 'diary'),
    	'add_new_item' => __('ダイアリー追加'),
    	'edit_item' => __('ダイアリーを編集'),
    	'new_item' => __('新しいダイアリー'),
    	'view_item' => __('ダイアリーを表示'),
    	'search_items' => __('ダイアリーを探す'),
    	'not_found' =>  __('ダイアリーが見つかりません'),
    	'not_found_in_trash' => __('ゴミ箱にダイアリー投稿はありません'),
    	'parent_item_colon' => ''
  	);
  	$args4 = array(
    	'labels' => $labels4,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => false,
    	'menu_position' => 5,
    	'supports' => array('title','editor'),
    	'has_archive' => true
  	);
  	//カスタム投稿タイプを登録
  	register_post_type('diary',$args4);

  	// タクソノミー
	$args_diary = array(
	   'label' => 'カテゴリー',
	   'public' => true,
	   'show_ui' => true,
	   'hierarchical' => true
    );
    register_taxonomy('diary_category','diary',$args_diary);
  
	flush_rewrite_rules( false );
}
//アクションをフック function my_custom_init() を呼び出す
add_action('init', 'my_custom_init');

register_nav_menus(array(
    'header_nav' => 'トップナビゲーション',
    'footer_nav' => 'フッターナビゲーション'
));

// 投稿の最初の画像のサムネイルURLを取得
function catch_that_image() {
	global $post;
    if ( preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches) ) {
    	$first_img = $matches[1][0];
    } else {
    	$first_img = "http://www.tccl.jp/wp/wp-content/themes/toei-kensetsu/images/noimg.png";
    }
	return $first_img;
}

//  抜粋が未入力なら代わりを出さない
// function excerpt_filter() {
// global $post;
//	$output = ($post->post_excerpt) ? $post->post_excerpt : '';
//	return $output;
// }
// add_filter('get_the_excerpt', 'excerpt_filter');

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');


// クラスを削除して、表示中メニューに 'current' クラスを付与する
add_filter( 'nav_menu_css_class', 'remove_to_currentClass', 10, 2 );
function remove_to_currentClass( $classes, $item ) {
    $classes = array();
    if( $item -> current == true ) {
        $classes[] = 'current';
    }
    return $classes;
}
 
// ID を削除する 
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){ 
    return $id = array(); 
}


//Editor style
function blanc_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'blanc_add_editor_styles' );

// Contact form 7 へ情報を渡す
function my_form_tag_filter2($tag){
  if ( ! is_array( $tag ) )
  return $tag;

  if(isset($_GET['recruit_name'])){
    $name = $tag['name'];
    if($name == 'your-recruit')
      $tag['values'] = (array) $_GET['recruit_name'];
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter2', 11);



// WP-Members　
add_filter( 'wpmem_login_form_args',    'remove_wpmem_txt_code' );
add_filter( 'wpmem_register_form_args', 'remove_wpmem_txt_code' );
function remove_wpmem_txt_code( $args ){
	$args = array(
		'txt_before' => '',
		'txt_after'  => ''
	);
	return $args;
}


// 常時SSL対策 httpパスをリプレース
function fix_ssl_attachment_url($url) {
    if(is_ssl()){
        $url = preg_replace("/^http:/", "https:", $url);
    }
    return $url;
}
add_filter("wp_get_attachment_url", "fix_ssl_attachment_url");


// 投稿画像からリンクを外す
add_filter( 'media_send_to_editor', 'my_media_send_to_editor', 999, 3 );
function my_media_send_to_editor( $html ) {
  return preg_replace( '/<a .*?>(.*?)<\/a>/', '$1', $html );
}

// 画像挿入時のいらないクラスなどを削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );

function remove_image_attribute( $html ){
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
	$html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
	$html = preg_replace( '/<a href=".+">/', '', $html );
	$html = preg_replace( '/<\/a>/', '', $html );
	return $html;
}
// 画像挿入時にタグを付与する
function image_wrap($html, $id, $attachment ){
	$html = '<div class="img_center">'."\n".$html."\n".'</div>'."\n";
	return $html;
}
add_filter('media_send_to_editor','image_wrap',10,3);

// エディタの変換機能を無効化する
function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'override_mce_options' );
add_image_size('img800x530', 800, 530);


// Contact dorm 7 の内部エラー「廃止予定の設定が使われている。」を解消する
add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {

	if ('4' == event.detail.contactFormId ) {
        location = 'http://terada-reiki.co.jp/contact-thanks';
    }

	if ('104' == event.detail.contactFormId ) {
        location = 'http://terada-reiki.co.jp/entry-thanks';
    }

}, false );
</script>
<?php
}

function wpcf7_validate_spam_message( $result, $tag ) {
  $value = str_replace(array(PHP_EOL,' '), '', esc_attr($_POST['msg']));
  if (!empty($value)) {
    if (preg_match('/^[!-~]+$/', $value)) {
      $result['valid'] = false;
      $result['reason'] = array('msg' => 'Please enter in Japanese');
    }
  }
  return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );
