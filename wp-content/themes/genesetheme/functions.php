<?php
// css and scripts

function wpdocs_genesetheme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(). '/style.css type = "text/css/' );
    wp_enqueue_style( 'skeleton', get_stylesheet_uri(). '/css/skeleton.css' );
    wp_enqueue_style( 'layout', get_stylesheet_uri(). '/css/layout.css' );
     wp_enqueue_style( 'editor-style', get_stylesheet_uri(). '/css/editor-style.css' );
    wp_enqueue_style("fontawesome", 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');


    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    wp_enqueue_script( 'shortcode', get_template_directory_uri() . '/js/mce-button.js', array(), '1.0.0', true );
    wp_enqueue_script('javascript', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js', array(), null, true);

}
add_action( 'wp_enqueue_scripts', 'wpdocs_genesetheme_scripts' );




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

class wf_widget extends WP_Widget {

    // Constructor, to initiate the widget
	function __construct() {
 

	parent::__construct(
         
        // base ID of the widget
        'wf_widget',
         
        // name of the widget
        __('Featured', 'genesetheme' ),
         
        // widget options
        array (
            'description' => __( 'Simple widget for featured texts in home.', 'genesetheme' )
        )
         
    );

    }

// widget form creation, in the administration
        function form( $instance ) {

            // Check values
            if ( $instance) {
                $title = esc_attr($instance['title']);
                $icon = esc_attr($instance['icon']);
                $textarea = esc_textarea($instance['textarea']);
            } else {
                $title = '';
                $icon = '';
                $textarea = '';
            }

     
            // markup for form ?>
            <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Featured Title:', 'wf_widget'); ?></label>

            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />

            </p>

            <p>
            <label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Featured text:', 'wf_widget'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
            </p>

             <p>
            <label for="<?php echo $this->get_field_id('icon'); ?>"><?php _e('Featured Icon:', 'wf_widget'); ?></label>

            <input class="widefat" id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" type="text" value="<?php echo $icon; ?>" />

            </p>


             
<?php
        }

// widget update: save widget data during edition
  function update( $new_instance, $old_instance ) {
 
         $instance = $old_instance;

      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['textarea'] = strip_tags($new_instance['textarea']);
      $instance['icon'] = strip_tags($new_instance['icon']);
     return $instance;

     
    }

    // widget display, front-end
    function widget($args, $instance) {
        extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $icon = $instance['icon'];
   $textarea = $instance['textarea'];
  
   // Display the widget
   // echo'<section class="container">';

   //    echo '<div class="one-third column>';
   //    echo "<h3>hello</h3>";
   //    echo '</div>';

   //    echo '<div class="one-third column>';
   //    echo '<h3>hello1</h3>';
   //    echo '</div>';
   
   //  echo'</section>';
    
  
   // echo $before_widget;
   // echo '<div class="one-third column>';
   
   
    
   if ( is_front_page('') )
    
    echo '<div class="one-third column">';
 
   // Check if title is set
   if ( $title  &&  $textarea) { 
   ?>
      <h3><i class = "<?php echo $icon; ?>" aria-hidden="true"></i>
      <?php echo $before_title . $title . $after_title; ?> </h3>
      <?php 
      echo '<p >'.$textarea.'</p>';
      
      
   }
   echo '</div>';
   
   

   // Check if text is set
   // if( $text ) {
   //    echo '<p class="wp_widget_plugin_text">'.$text.'</p>';
   // }

   // Check if textarea is set
   
   
  
   
    // echo '</div>';
    // echo $after_widget;
   
   

    }

}


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


// for shortcode in visual editor in admin

function FormattedText($atts, $content = null ) {
    return '<div class="tagline"><p>'.$content.'</p></div><hr>';
}
add_shortcode("Formatted", "FormattedText");








/*
Plugin Name: Visual Editor Buttons for shortcode
Plugin URI: #
Description: Adds a button to visual editor.
Author: Genese
*/

function enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["shortcode_button_plugin"] =  get_template_directory_uri() .'/js/mce-button.js';
    return $plugin_array;
}

add_filter("mce_external_plugins", "enqueue_plugin_scripts");

function register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "shortcode");
    return $buttons;
}

add_filter("mce_buttons", "register_buttons_editor");
