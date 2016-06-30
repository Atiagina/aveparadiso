<?php
/**
*The functions file for aveparadiso theme.
Theme Name: aveparadiso
Theme URI: http://wordpress.org/themes/aveparadiso
Author: Anna Atiagina
Author URI: http://atiagina.com/
Description: The theme created for AveParadiso in July 2016 to represent the band.
Version: 1.0
*/


//Enable Feature images and post thumbnails
add_theme_support( 'post-thumbnails' );
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main',
		  'footer-menu' => 'Footer-menu',
			'social-menu' => 'social-menu'
		)
	);
};

//create page excerpts
add_post_type_support('page', 'excerpt');
//



//Mike Sinkula's flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
 // create the list items for images with captions
    
    foreach ( $attachments as $attachment_id => $attachment ) { 
	
		$theImage = wp_get_attachment_image($attachment_id, 'flexslider');
	
        echo '<li>';
		echo $theImage;
        echo '</li>';
        
    } 
    
    echo '</ul>';
    echo '</div>';
        ?>
    <!-- End Slider -->
        
	<?php }// end see if images
	
} // end add flexslide 
add_shortcode( 'flexslider', 'add_flexslider' ); 

// Create FontAwesome Shortcode
function fontawesome_func( $atts ) {
	$atts = shortcode_atts(
		array(
			'icon' => 'icon',
		), $atts, 'fa' );

	return '<i class="' . $atts['icon'] .'"></i>';
}
add_shortcode( 'fa', 'fontawesome_func' );

//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    register_sidebar(
        array(
			'id' => 'social',
			'name' => __( 'Follow Us' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="row"><h3 class="widget-title">',
			'after_title' => '</h3></div>'
		)
	);
	
}

add_image_size('page-post-img', 500, 350, true);

function exclude_testimonials($query){
    if( !$query->is_category('testimonials') && $query->is_main_query() ){
        $query->set('cat','-2');
    }
}

add_action('pre_get_posts', 'exclude_testimonials');

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'new-size', 500, 350, true ); //(cropped)
}

add_filter('image_size_names_choose', 'my_image_sizes');

function my_image_sizes($sizes) {
$addsizes = array(
"new-size" => __( "New Size")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}

add_action( 'wpcf7_enqueue_scripts', 'custom_recaptcha_enqueue_scripts', 11 );

function custom_recaptcha_enqueue_scripts() {
	wp_deregister_script( 'google-recaptcha' );

	$url = 'https://www.google.com/recaptcha/api.js';
	$url = add_query_arg( array(
		'onload' => 'recaptchaCallback',
		'render' => 'explicit',
	 	'hl' => 'es' ), $url );

	wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
}