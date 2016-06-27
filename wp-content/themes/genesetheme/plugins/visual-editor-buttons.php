<?php

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

