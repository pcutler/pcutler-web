<?php
/*
Skematik functions and definitions
@package skematik
@since skematik 1.0
*/
require_once( trailingslashit( get_template_directory() ) . 'library/core.php' );
/*
==========================================================
THEME DEFAULTS
==========================================================
*/

/* Set the content width based on the theme's design and stylesheet. @since skematik 1.0 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/* Load Skematik functions on 'after_setup_theme'. */
add_action( 'after_setup_theme', 'skematik_theme_setup' );

if ( ! function_exists( 'skematik_theme_setup' ) ):
/*
Sets up theme defaults and registers support for various WordPress features. Note that this function is hooked into the after_setup_theme hook, which runs before the init hook. The init hook is too late for some features, such as indicating support post thumbnails.@since skematik 1.0
*/
function skematik_theme_setup() {
	
	/* Load custom Skematik functions. */
	require( get_template_directory() . '/functions/template-functions.php' );

	/* Load custom Skematik header functions. */
	require( get_template_directory() . '/functions/skematik-header-functions.php' );
	
	/* Load custom Skematik header functions. */
	require( get_template_directory() . '/functions/skematik-footer-functions.php' );
	
	/* Load custom Skematik Theme widgets. */
	require( get_template_directory() . '/functions/template-widgets.php' );
	
	/* Load custom Skematik Theme Customizer options. */
	require( get_template_directory() . '/functions/template-customizer.php' );

	/* Load custom Skematik Theme functions. */
	require( get_template_directory() . '/functions/template-ecommerce.php' );
	
	/* Load BuddyPress functions after checking if it's active. */
	if ( in_array( 'buddypress/bp-loader.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		require( get_template_directory() . '/functions/template-buddypress.php' );	
	}
	
	require( get_template_directory() . '/functions/template-sidebars.php' );
	
	/* Load basic styles to the editor */
	add_editor_style('style-editor.css');

	/* Make theme available for translation. Translations can be filed in the /languages/ directory */
	load_theme_textdomain( 'skematiktheme', get_template_directory() . '/languages' );

	/* Add default posts and comments RSS feed links to head */
	add_theme_support( 'automatic-feed-links' );

	/* Enable support for Post Thumbnails */
	add_theme_support( 'post-thumbnails' );
	
	/* Enable support for Theme Menus */
	add_theme_support( 'menus' );

	/* Identify support for WooCommerce */
	add_theme_support('woocommerce');

}
endif; // skematik_setup


/*
==========================================================
Call stylesheets and scripts from Core
==========================================================
*/
/* Put the call to this theme's css into a function */
function skematik_styles_css() {
	wp_enqueue_style( 'skematik-style', get_stylesheet_uri() );
}

/* Load stylesheets */
add_action( 'wp_enqueue_scripts', 'skematik_bootstrap_css', 99 );
add_action( 'wp_enqueue_scripts', 'skematik_bootstrap_responsive_css', 99  );
add_action( 'wp_enqueue_scripts', 'skematik_styles_css',99 );
add_action( 'wp_enqueue_scripts', 'skematik_prettify_css', 99  );
if (of_get_option('lightbox_switch', 1) == 1) {
	add_action( 'wp_enqueue_scripts', 'skematik_lightbox_css', 99  );
}

/* Load Scripts */
add_action( 'wp_enqueue_scripts', 'skematik_jquery_js' );
add_action( 'wp_enqueue_scripts', 'skematik_bootstrap_js' );
add_action( 'wp_enqueue_scripts', 'skematik_application_js' );
add_action( 'wp_enqueue_scripts', 'skematik_prettify_js' );
if (of_get_option('lightbox_switch', 1) == 1) {
	add_action( 'wp_enqueue_scripts', 'skematik_lightbox_js' );
}
add_action( 'wp_enqueue_scripts', 'skematik_comments_js' );
add_action( 'wp_enqueue_scripts', 'skematik_keyboard_nav_js' );
add_action( 'wp_enqueue_scripts', 'skematik_js' );

/*
==========================================================
Loads Options
==========================================================
*/
require_once dirname( __FILE__ ) . '/options.php';

/*
==========================================================
Loads Theme Metaboxes
==========================================================
*/
require_once( get_template_directory() . '/functions/template-metaboxes.php' );

/*
==========================================================
Loads the custom styles from the Theme Customizer
==========================================================
*/
add_action( 'wp_head', 'skematik_custom_style');
function skematik_custom_style() {
		require_once( get_template_directory() . '/functions/custom-style.php' );
		}

/*
==========================================================
FEATURED IMAGE DRAG & DROP
==========================================================
*/
/* Load the Featured Image */
if ( ! function_exists( 'dgd_removeDefaultBoxes' ) ) {
	if (of_get_option('drag_and_drop_featured_image_switch', 1) == 1) {
		function skematik_drag_and_drop_featured_image() {
			require_once( get_template_directory() . '/library/plugins/dnd_featured_image.php' );
		}
		add_action( 'after_setup_theme', 'skematik_drag_and_drop_featured_image' );
	}
}

/*
==========================================================
TEMPLATES
==========================================================
*/
function jbst_prepare_wrappers()
{
add_action( 'jbst_before_content_page','jbst_open_content_wrappers',10);
add_action( 'jbst_after_content_page','jbst_close_content_wrappers',10);
}

add_action( 'wp_head', 'jbst_prepare_wrappers',10);

/*
==========================================================
SAVE CUTOMIZER CSS TO FILE
==========================================================
*/
//http://stackoverflow.com/questions/14802251/hook-into-the-wordpress-theme-customizer-save-action
/*add_action( 'customize_save_after', 'save_css',10);
function save_css($c)
{
		
		$values = json_decode( wp_unslash( $_POST['customized'] ), true );
		
		if($values['default_grid']=='xs')
		{
			$fp = fopen(get_template_directory().'/css/custom.css', 'w+');
			fwrite($fp, '.xs{width:100%;}'."\n");
			fclose($fp);
		}
		
		exit;
}

function my_admin_notice() {
    ?>
    <div class="updated">
        <p><?php _e( 'Updated!', 'my-text-domain' ); ?></p>
    </div>
    <?php
}*/

/*
==========================================================
Internationalizing And Localizing 
==========================================================
*/

/* text domain will be set in core.php */
	
/*
==========================================================
AUTOMATIC UPDATES
==========================================================
*/
/*Initialize the update checker.
add_action( 'admin_init', 'skematik_check_for_update');
	function skematik_check_for_update() {
	require_once( get_template_directory() . '/library/updates/theme-update-checker.php' );
	$example_update_checker = new ThemeUpdateChecker(
		'jamedo-bootstrap-start-theme',                                            //Theme folder name, AKA "slug". 
		'http://skematiktheme.com/services/updates/skematik/info.json' //URL of the metadata file.
	);
}*/

//require_once(get_template_directory() .'/library/updates/wp-updates-theme.php');
//new WPUpdatesThemeUpdater( 'http://wp-updates.com/api/1/theme', 75, basename(get_template_directory()) );
