<?php
/**
 * ADCO Template Hooks
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Main Content
  */
  add_action( 'main_content', 'adco_hero_banner', 5 );
  add_action( 'main_content', 'adco_product_section', 10 );
  add_action( 'main_content', 'adco_mission_section', 15 );
  add_action( 'main_content', 'adco_process_section', 20 );
  add_action( 'main_content', 'adco_cta_1', 25 );
  add_action( 'main_content', 'adco_about_section', 30 );
  add_action( 'main_content', 'adco_theme_section', 35 );
  add_action( 'main_content', 'adco_contact_modal', 40 );
