<?php

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
   
   

    }

}
