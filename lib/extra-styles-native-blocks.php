<?php
/**
* Block styles.
*/

function default_theme_register_block_styles() {
   register_block_style(
       'core/group',
       array(
           'name'         => 'group-colorfull-bg',
           'label'        => __( 'Colorfull BG', 'textdomain' ),
           'is_default'   => false,
       )
   );
 
}
add_action( 'init', 'default_theme_register_block_styles' );