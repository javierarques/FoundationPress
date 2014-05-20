<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
    'top-bar' => 'Top bar',
    'footer' => 'Footer',
    'mobile-off-canvas' => 'Mobile',
    'legal' => 'Bottom link'
));


/**
 * Top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function theme_top_bar_menu() {
    wp_nav_menu(array(
        'container' => 'div',                           // remove nav container
        'container_class' => 'top-bar-section',
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu',            // adding custom nav class
        'theme_location' => 'top-bar',                // where it's located in the theme
    ));
}


/**
 * Mobile off-canvas
 */
function theme_off_canvas_menu() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'off-canvas-list',              // adding custom nav class
        'theme_location' => 'mobile-off-canvas',        // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

/**
 * Footer menu
 */
function theme_footer_menu() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'footer-menu',              // adding custom nav class
        'theme_location' => 'footer',        // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

/**
 * Footer menu
 */
function theme_legal_menu() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu_class' => 'inline-list',              // adding custom nav class
        'theme_location' => 'legal',        // where it's located in the theme
        'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="footer-legal">Copyright © <?php echo date("Y")?>, Panaria panderias S.L.</li>%3$s</ul>'

    ));
}