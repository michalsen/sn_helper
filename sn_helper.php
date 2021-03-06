<?php
/*
Plugin Name: Straight North
Plugin URI: http://straightnorth.com
Description: Dev team helper plugin
Version:     1
Author: Eric L. Michalsen
Author URI: @michalsen
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}


wp_register_script( 'sn_helper', plugins_url() . '/sn_helper/assets/js/sn_helper.js' );
  $variable_array = array(
    'sn_path' => __(plugins_url()),
  );
wp_localize_script( 'sn_helper', 'snVars', $variable_array );
wp_enqueue_script( 'sn_helper' );

