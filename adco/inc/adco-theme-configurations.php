<?php
/**
 * ADCO Theme Configurations
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Add SVG Support
  */
 function addSVG($file_types){
     $new_filetypes = array();
     $new_filetypes['svg'] = 'image/svg+xml';
     $file_types = array_merge($file_types, $new_filetypes );
     return $file_types;
 }
 add_action('upload_mimes', 'addSVG');
