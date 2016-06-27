<?php

// css and scripts

function wpdocs_genesetheme_scripts() {
    // wp_enqueue_style( 'style', get_stylesheet_uri(). '/style.css type = "text/css/' );
    // wp_enqueue_style( 'skeleton', get_stylesheet_uri(). '/css/skeleton.css' );
    // wp_enqueue_style( 'layout', get_stylesheet_uri(). '/css/layout.css' );
    // wp_enqueue_style( 'editor-style', get_stylesheet_uri(). '/css/editor-style.css' );
    wp_enqueue_style("fontawesome", 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');


    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'upload-logo', get_template_directory_uri() . '/js/upload-logo.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'shortcode', get_template_directory_uri() . '/js/mce-button.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ace_code_highlighter_js', get_template_directory_uri() . '/ace/ace.js', '', '1.0.0', true );
    wp_enqueue_script( 'ace_mode_js', get_template_directory_uri() . '/ace/mode-css.js', array( 'ace_code_highlighter_js' ), '1.0.0', true );
    wp_enqueue_script( 'ace_worker_js', get_template_directory_uri() . '/ace/worker-css.js', array( 'ace_code_highlighter_js' ), '1.0.0', true );
    wp_enqueue_script( 'custom_css_js', get_template_directory_uri() . '/custom-css.js', array( 'jquery', 'ace_code_highlighter_js' ), '1.0.0', true );
    
}



add_action( 'admin_enqueue_scripts', 'wpdocs_genesetheme_scripts' );



add_action ( 'admin_enqueue_scripts', function () {
        if (is_admin ())
            wp_enqueue_media ();
    } );

// for css

add_action('wp_head', 'display_custom_css');
function display_custom_css() {
$custom_css = get_option( 'custom_css' );
if ( ! empty( $custom_css ) ) { ?>
<style type="text/css">
    <?php
    echo '/* Custom CSS */' . "\n";
    echo $custom_css . "\n";
    ?>
    
</style>
    <?php
  }
}





//nav-menu register
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'genesetheme' ) );
}*/

// for featured image
add_theme_support( 'post-thumbnails' );


////////////////////
// Another Example//
///////////////////

// if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
//     add_theme_support( 'post-thumbnails' );
//     set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
//     add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
// }




/**
 * Register our sidebars and widgetized areas.
 *
 */
add_action( 'widgets_init', 'genesetheme_widgets_init' );


// Register widget featured
function wf_widget() {
 
    register_widget( 'wf_widget' );
 
}
add_action( 'widgets_init', 'wf_widget' );

function genesetheme_widgets_init() {
// register_sidebar(array(
// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 'after_widget' => '</li>',
// 'before_title' => '<h2 class="widgettitle">',
// 'after_title' => '</h2>',
// ));

	//widget area in home(featured text)
	register_sidebar(array(
'name' => __( 'Featured Text', 'genesetheme' ),
'id'            => 'featured-1',
'before_widget' => '',
'after_widget' => '<hr />',
'before_title' => '',
'after_title' => '',
));


	// Footer content for genesetheme
	// Footer Area 1

register_sidebar(array(
'name' =>  __( 'Footer Area 1', 'genesetheme' ),
'id'            => 'footer_1',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
// Footer Area 2
register_sidebar(array(
'name' => __( 'Footer Area 2', 'genesetheme' ),
'id'            => 'footer_2',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

// Footer Area 3
register_sidebar(array(
'name' => __( 'Footer Area 3', 'genesetheme' ),
'id'            => 'footer_3',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',

));

// Footer Area 4
register_sidebar(array(
'name' => __( 'Footer Area 4', 'genesetheme' ),
'id'            => 'footer_4',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

}


//creating widget for featured text
include( get_template_directory() . '/widgets.php' );
// end of featured text widget



// for slider
if( !function_exists( 'set_revslider_as_theme') ):

function plugin_notice() {
    ?>
    <div class="plugin notice">
        <p><?php _e( 'Need to install revolution slider plugin! <i>Click here &nbsp</i> <u><a href="https://revolution.themepunch.com/"" target=_blank> Slider Revolution</a></u>', 'genesetheme' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'plugin_notice' );
endif;


// for shortcode in visual editor in admin (Formatted Plugin)
include( get_template_directory() . '/plugins/visual-editor-buttons.php' );
// end formatted plugin



// for limiting the Post Excerpt Length Using Number Of Words in Home page
//  function excerpt($limit) {
//   $excerpt = explode(' ', get_the_excerpt(), $limit);
//   if (count($excerpt)>=$limit) {
//     array_pop($excerpt);
//     $excerpt = implode(" ",$excerpt).'...';
//   } else {
//     $excerpt = implode(" ",$excerpt);
//   } 
//   $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
//   return $excerpt;
// }
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $permalink = get_permalink($post->ID);
    $content = implode(" ",$content).'...<a href="'.$permalink.'">Read more</a>';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

// Add and manage Theme Option
include( get_template_directory() . '/theme-option.php' );
// end theme option



