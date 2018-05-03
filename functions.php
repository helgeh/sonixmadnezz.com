<?php


function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

// function my_wp_nav_menu_args( $args = '' )
// {
// 	$args['container'] = false;
// 	return $args;
// } // function

// add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// function register_my_menus() {
//   register_nav_menus(
//     array(
//       'header-menu' => __( 'Header Menu' ),
//       'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'register_my_menus' );



// Add support for a variety of post formats
add_theme_support( 'post-formats', array( 'video' ) );



if ( ! function_exists( 'sonixmadnezz_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function sonixmadnezz_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text">Post navigation</h3>
			<div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> Older posts'); ?></div>
			<div class="nav-next"><?php previous_posts_link('Newer posts <span class="meta-nav">&rarr;</span>'); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // sonixmadnezz_content_nav



// enqueue styles

function sonix_styles()  
{ 
	/*
    <link href='http://fonts.googleapis.com/css?family=Griffy' rel='stylesheet' type='text/css'>
    <link href="/wp-content/themes/sonixmadnezz/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/sonixmadnezz/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/wp-content/themes/sonixmadnezz/style.css" rel="stylesheet">
	*/
    // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
    wp_register_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Griffy');
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), '1.0', 'all' );
    wp_register_style( 'sonix_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    
    wp_enqueue_style( 'googlefont' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap-responsive' );
    wp_enqueue_style( 'sonix_style');
}
add_action('wp_enqueue_scripts', 'sonix_styles');

// enqueue javascript

function sonix_js(){
  // wp_register_script('less', get_template_directory_uri().'/library/js/less-1.3.0.min.js');

  /*
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/wp-content/themes/sonixmadnezz/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script src="/wp-content/themes/sonixmadnezz/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/sonixmadnezz/js/jquery.fitvids.js"></script>
		<!--script src="/wp-content/themes/sonixmadnezz/js/css3-mediaqueries.js"></script>
		<script src="/wp-content/themes/sonixmadnezz/js/fwslider.js"></script>
		<script type="text/javascript">
		    $(window).load(function(){
		        new fwslider().init({
		            duration: "1000",
		            pause:    "100000"
		        });
		    });
		</script-->
		<script type="text/javascript" src="/wp-content/themes/sonixmadnezz/js/script.js"></script>
	*/

  wp_deregister_script('jquery'); // initiate the function  
  wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.8.2.min.js', false, '1.8.2');

  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', false, '2.2.1');
  // // wp_register_script('bootstrap-button', get_template_directory_uri().'/library/js/bootstrap-button.js');
  // // wp_register_script('bootstrap-carousel', get_template_directory_uri().'/library/js/bootstrap-carousel.js');
  // // wp_register_script('bootstrap-collapse', get_template_directory_uri().'/library/js/bootstrap-collapse.js');
  // // wp_register_script('bootstrap-dropdown', get_template_directory_uri().'/library/js/bootstrap-dropdown.js');
  // // wp_register_script('bootstrap-modal', get_template_directory_uri().'/library/js/bootstrap-modal.js');
  // // wp_register_script('bootstrap-popover', get_template_directory_uri().'/library/js/bootstrap-popover.js');
  // // wp_register_script('bootstrap-scrollspy', get_template_directory_uri().'/library/js/bootstrap-scrollspy.js');
  // // wp_register_script('bootstrap-tab', get_template_directory_uri().'/library/js/bootstrap-tab.js');
  // // wp_register_script('bootstrap-tooltip', get_template_directory_uri().'/library/js/bootstrap-tooltip.js');
  // // wp_register_script('bootstrap-transition', get_template_directory_uri().'/library/js/bootstrap-transition.js');
  // // wp_register_script('bootstrap-typeahead', get_template_directory_uri().'/library/js/bootstrap-typeahead.js');

  wp_register_script('fitvids', get_template_directory_uri().'/js/jquery.fitvids.js', false, '1.0');
  wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr.full.min.js', false, '2.0.6');
  wp_register_script('my_script', get_stylesheet_directory_uri().'/js/script.js');

  // wp_enqueue_script('less', array(''), '1.3.0', true);
  
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-1.8.1.min.js', array(), '1.8.1', true);

  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-button', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-carousel', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-collapse', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-dropdown', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-modal', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-tooltip', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-popover', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-scrollspy', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-tab', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-transition', array('jQuery'), '1.1', true);
  // wp_enqueue_script('bootstrap-typeahead', array('jQuery'), '1.1', true);
  wp_enqueue_script('fitvids', get_template_directory_uri().'/js/jquery.fitvids.js', array('jQuery'), '1.1', true);
  wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.full.min.js', array('jQuery'), '1.1', true);
  wp_enqueue_script('my_script', get_stylesheet_directory_uri().'/js/script.js', array('jQuery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'sonix_js');
