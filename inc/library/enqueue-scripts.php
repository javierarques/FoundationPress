<?php

function theme_scripts() {

  // deregister the jquery version bundled with wordpress
  wp_deregister_script( 'jquery' );
  
  wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0', true);

  // register scripts
  wp_register_script( 'modernizr', THEME_JS . '/modernizr.min.js', array(), '1.0.0', false );
  wp_register_script( 'app-js', THEME_JS . '/app.min.js', false, '1.0.0', true );

  // enqueue scripts
  wp_enqueue_script('modernizr');
  wp_enqueue_script('app-js');
  
  // enqueue css
  wp_enqueue_style('app-css', THEME_CSS . '/app.css');
  
  
  
  /**
   * MAP
   */
    /*
  if ( is_page('tiendas')) {
    // Register the script first.
    wp_register_script( 'map', THEME_JS .'/app/map.js', array('jquery'), false, true);

    // Now we can localize the script with our data.
    $settings_array = array( 'icon_url' =>  THEME_IMG . '/icons/marker.png');
    
    wp_localize_script( 'map', 'settings', $settings_array );

    // The script can be enqueued now or later.
    wp_enqueue_script( 'map' );
  }
  */


}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
