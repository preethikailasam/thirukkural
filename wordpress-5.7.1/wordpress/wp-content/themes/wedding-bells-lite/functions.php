<?php   
/**
 * Wedding Bells Lite functions and definitions
 *
 * @package Wedding Bells Lite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'wedding_bells_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.  
 */
function wedding_bells_lite_setup() {		
	$GLOBALS['content_width'] = apply_filters( 'wedding_bells_lite_content_width', 680 );	
	load_theme_textdomain( 'wedding-bells-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support('html5');
	add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'title-tag' );	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 150,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wedding-bells-lite' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // wedding_bells_lite_setup
add_action( 'after_setup_theme', 'wedding_bells_lite_setup' );
function wedding_bells_lite_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'wedding-bells-lite' ),
		'description'   => __( 'Appears on blog page sidebar', 'wedding-bells-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'wedding_bells_lite_widgets_init' );


function wedding_bells_lite_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Assistant, trsnalate this to off, do not
		* translate into your own language.
		*/
		$assistant = _x('on','Assistant:on or off','wedding-bells-lite');	
		
		/* Translators: If there are any character that are not
		* supported by Oleo Script, trsnalate this to off, do not
		* translate into your own language.
		*/
		$oleoscript = _x('on','oleoscript:on or off','wedding-bells-lite');				
		
		    if('off' !== $assistant || 'off' !== $oleoscript ){
			    $font_family = array();
			
			if('off' !== $assistant){
				$font_family[] = 'Assistant:300,400,600';
			}
			if('off' !== $oleoscript){
				$font_family[] = 'Oleo Script:400,600,700';
			}
							
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function wedding_bells_lite_scripts() {
	wp_enqueue_style('wedding-bells-lite-font', wedding_bells_lite_font_url(), array());
	wp_enqueue_style( 'wedding-bells-lite-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'wedding-bells-lite-responsive', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'wedding-bells-lite-editable', get_template_directory_uri() . '/js/editable.js' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedding_bells_lite_scripts' );

function wedding_bells_lite_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('wedding-bells-lite-ie', get_template_directory_uri().'/css/ie.css', array( 'wedding-bells-lite-style' ), '20160928' );
	wp_style_add_data('wedding-bells-lite-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'wedding-bells-lite-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'wedding-bells-lite-style' ), '20160928' );
	wp_style_add_data( 'wedding-bells-lite-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'wedding-bells-lite-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'wedding-bells-lite-style' ), '20160928' );
	wp_style_add_data( 'wedding-bells-lite-ie7', 'conditional', 'lt IE 8' );	
	}
add_action('wp_enqueue_scripts','wedding_bells_lite_ie_stylesheet');

define('WEDDING_BELLS_LITE_THEME_DOC','https://gracethemes.com/documentation/wedding-bells/#homepage-lite','wedding-bells-lite');
define('WEDDING_BELLS_LITE_PROTHEME_URL','https://gracethemes.com/themes/wedding-wordpress-theme/','wedding-bells-lite');
define('WEDDING_BELLS_LITE_LIVE_DEMO','https://gracethemes.com/demo/wedding-bells/','wedding-bells-lite');

if ( ! function_exists( 'wedding_bells_lite_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function wedding_bells_lite_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Customize Pro included.
 */
require_once get_template_directory() . '/customize-pro/class-customize.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template for about theme.
 */
if ( is_admin() ) { 
require get_template_directory() . '/inc/about-themes.php';
}

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

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function wedding_bells_lite_skip_link_focus_fix() {  
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php                
}
add_action( 'wp_print_footer_scripts', 'wedding_bells_lite_skip_link_focus_fix' );