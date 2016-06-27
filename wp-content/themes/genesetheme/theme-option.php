<?php


	add_action("admin_menu","setup_theme_admin_menus");
	add_action("admin_init", "theme_option_settings");


	function setup_theme_admin_menus() {

      // add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
      	add_submenu_page('themes.php', 'theme Option Elements', 'Theme Options', 'manage_options', 'theme-option-elements', 'theme_option_page_settings'); 

	}

	function theme_option_settings(){
		register_setting('theme_logo_options', 'logo_link');
		register_setting('theme_logo_options', 'upload_logo');
	}


  add_action('admin_init','register_custom_css_setting');
  // add_action('admin_init', 'register_custom_js');

  function register_custom_css_setting(){
    register_setting('custom_css','custom_css','custom_css_validation');
  }
 
   

	function theme_option_page_settings(){
?>
		<div class = "wrap">
			<h2>Genesetheme Options</h2>

			
			<form id = '#custom_css_form'  action="options.php" method="post" >
			<?php
            	// This prints out all hidden setting fields
            	settings_fields( 'theme_logo_options' );
            	do_settings_sections( 'theme_logo_options' );
            ?>

            <input type="text" name="logo_link" id="image-url" value="<?php echo esc_attr( get_option('logo_link') ); ?>" />
        		<input type= "button" id ="upload-button" class = "button"value="<?php esc_attr_e('Upload Logo', 'genesetheme'); ?>" /><br /><br>


<!-- Custom css  -->


  <?php $custom_css = get_option( 'custom_css', $custom_css_default );?>
    
    
        <div id="icon-themes" class="icon32"></div>
        <h3><?php _e( 'Custom CSS' ); ?></h3>

        <?php 
        if ( ! empty( $_GET['settings-updated'] ) ) 
          echo '<div id="message" class="updated"><p><strong>' . __( 'Custom CSS updated.' ) . '</strong></p></div>';
        ?>

        <?php settings_fields( 'custom_css' ); ?>
        <div id="custom_css_container">
                <div name="custom_css" id="custom_css" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 60%; height: 300px; position: relative;"></div>
        </div>
 
            <textarea id="custom_css_textarea" name="custom_css" style=""><?php echo $custom_css; ?></textarea>
            
<!-- end custom css -->

            	<!-- <p class="submit"> -->
                    <p><input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ) ?>" /></p>
      

                	
			</form>	
			
		</div>
    
	
<?php
}

function custom_css_validation( $input ) {
    if ( ! empty( $input['custom_css'] ) )
        $input['custom_css'] = trim( $input['custom_css'] );
    return $input;
}
?>


