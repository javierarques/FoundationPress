<?php
/*
Author: Javier Arques
URL: http://artvisual.net
*/

// Config file
require_once('inc/library/config.php'); 

// Various clean up functions
require_once('inc/library/cleanup.php'); 

// Required for Foundation to work properly
require_once('inc/library/foundation.php');

// Register all navigation menus
require_once('inc/library/navigation.php');

// Add menu walker
require_once('inc/library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('inc/library/widget-areas.php');

// Return entry meta information for posts
require_once('inc/library/entry-meta.php');

// Enqueue scripts
require_once('inc/library/enqueue-scripts.php');

// Add theme support
require_once('inc/library/theme-support.php');

// Custom admin
require_once('inc/library/admin.php');

// Custom post types
require_once('inc/library/custom-post-types.php');

// Utilities
require_once('inc/library/utils.php');