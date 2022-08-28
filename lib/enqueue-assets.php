<?php
 
function scripts_and_styles(){
   
   wp_register_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), false);
   wp_register_style('google-font-oswald', "https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap", array(), false);
   
   // wp_enqueue_style('main_style', get_stylesheet_uri(), array('font-awesome','google-font-oswald'));
   wp_enqueue_style('main_style', get_theme_file_uri('/build/index.scss.css'), array('font-awesome','google-font-oswald'));
   // wp_enqueue_style('main_style', get_theme_file_uri('/build/style.css'));
   wp_enqueue_script('main_js', get_theme_file_uri('/build/index.scss.js'), array('jquery'), '1.0', true );
}

function scripts_and_styles_editor(){   
   wp_register_style('google-font-oswald', "https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap", array(), false);

   wp_enqueue_style('main_style', get_theme_file_uri('/build/editor.scss.css'), array('google-font-oswald'));
   // wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true );
}
 
//Just Frontend
add_action('wp_enqueue_scripts', 'scripts_and_styles');
//Frontend & Editor
// add_action('enqueue_block_assets', 'scripts_and_styles');
//Just Editor
add_action('enqueue_block_editor_assets', 'scripts_and_styles_editor');