<?php

/**
 * putubajra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package putubajra
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function putubajra_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on putubajra, use a find and replace
		* to change 'putubajra' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('putubajra', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'putubajra'),
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
            'putubajra_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'putubajra_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function putubajra_content_width()
{
    $GLOBALS['content_width'] = apply_filters('putubajra_content_width', 640);
}
add_action('after_setup_theme', 'putubajra_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function putubajra_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'putubajra'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'putubajra'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'putubajra_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function putubajra_scripts()
{
    if (is_page_template('page-wedding.php')) {
        wp_enqueue_style('wedding-css', get_template_directory_uri() . '/css/dist/wedding.min.css', array(), rand(111, 9999), 'all');
    } else {
        wp_enqueue_style('putubajra-style', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('putubajra-style', 'rtl', 'replace');
    }
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), _S_VERSION);
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.css', array(), _S_VERSION);
    wp_enqueue_style('photoswipe-css', get_template_directory_uri() . '/css/photoswipe.css', array(), _S_VERSION);
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION);

    wp_enqueue_script('putubajra-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('jQuery-js', 'https://code.jquery.com/jquery-3.6.4.slim.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('fontawesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('isotope-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true);
    if (is_page_template('page-wedding.php')) {
        wp_enqueue_script('wedding-js', get_template_directory_uri() . '/js/wedding.js', array(), rand(111, 9999), 'all', true);
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'putubajra_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

// Add API endpoint for wedding messages
add_action('rest_api_init', function(){
    # domain/wp-json/
    register_rest_route('wedding-messages/v1', '/message', array(
        'methods' => 'POST',
        'callback' => 'wedding_post_message',
    ));

    register_rest_route('wedding-messages/v1', '/message', array(
        'methods' => 'GET',
        'callback' => 'wedding_get_message',
    ));

    register_rest_route('wedding-share/v1', '/list', array(
        'methods' => 'POST',
        'callback' => 'wedding_post_list',
    ));
});

function wedding_post_message($data){
    global $wpdb;

    $name = $data['name'];
    $messages = $data['messages'];
    $attendance = $data['attendance'];
    $table_name = $wpdb->prefix . 'wedding_messages';

    $data = array(
        'name' => $name,
        'attendance' => $attendance,
        'messages' => $messages,
    );

    $data_format = array('%s', '%s', '%s');

    $wpdb->insert($table_name,$data,$data_format);
    $wpdb->print_error();
}

function wedding_get_message(){
    global $wpdb;

    $table_name = $wpdb->prefix . 'wedding_messages';

    $messages = $wpdb->get_results('SELECT * FROM ' . $table_name . ' ORDER BY created_at DESC');
    echo json_encode($messages);
}

function wedding_post_list($data){
    global $wpdb;


}
