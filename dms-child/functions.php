<?php
/*==========================================================================================
Add stylesheets/javascripts to enqueue
============================================================================================*/
function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
    wp_enqueue_script( 'child_scripts', get_theme_file_uri().'/assets/js/child-scripts.js', '', '1.0.0', true);
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', '' , '1.0.0', false);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
/*==========================================================================================
// Favicon
============================================================================================*/
function pcsd_add_favicon(){ ?>
	<!-- Custom Favicons -->
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon.png">
	<?php }
//add the favicon link to the live site head
add_action('wp_head','pcsd_add_favicon');
//add the favicon to the login page
add_action('login_head','pcsd_add_favicon');
/*==========================================================================================
Custom Excerpt
============================================================================================*/
function get_excerpt(){
	$excerpt = get_the_content();
	//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 200);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = '<p>'.$excerpt.'...'.'</p>';
	return $excerpt;
}
/*==========================================================================================
// custom Login Page
============================================================================================*/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Dixon Middle School | Provo City School District';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/*-------------------------------------------------------*/
// page for view all digital signage
/*-------------------------------------------------------*/

add_action( 'admin_menu', 'pcsd_digitalsignage_admin_menu' );
function pcsd_digitalsignage_admin_menu() {
  add_menu_page( 'Digital Signage View All', 'Digital Signage View All', 'edit_digital_signages', 'digitalsignage-viewall.php', 'digitalsignage_viewall', 'https://globalassets.provo.edu/image/icons/pcsd-icon-16x16.png', 8  );
}
function digitalsignage_viewall(){
	?>
	<style>
		div.viewall {
		display: grid;
		grid-template-columns: 33% 33% 33%;

		}
	  iframe {width: 100%;min-height: 300px;}
	</style>
	<div class="viewall">
	<iframe src="https://dixon.provo.edu/digital-signage-child-nutrition-line-1/"></iframe>
	<iframe src="https://dixon.provo.edu/digital-signage-child-nutrition-line-2/"></iframe>
	<iframe src="https://dixon.provo.edu/digital-signage-south-west-hallway-first-floor/"></iframe>
	<iframe src="https://dixon.provo.edu/digital-signage-south-west-hallway-second-floor/"></iframe>
	</div>
	<?php
}
/*==========================================================================================
// ShortCodes
============================================================================================*/
