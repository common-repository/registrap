<?php

/*
Plugin Name: RegisTrap
Plugin URI: http://room34.com/downloads/wppi/registrap
Description: No longer supported.
Version: 0.6.1
Author: Scott Anderson / Room 34 Creative Services
Author URI: http://room34.com
*/

add_action('admin_init', function() { deactivate_plugins(plugin_basename(__FILE__)); });
