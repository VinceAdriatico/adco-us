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
  * Admin
  */
  add_action( 'admin_main_content', 'adco_hero_banner_config', 5 );
  add_action( 'admin_main_content', 'adco_product_section_config', 10 );
  add_action( 'admin_main_content', 'adco_mission_section_config', 15 );
  add_action( 'admin_main_content', 'adco_process_section_config', 20 );
  add_action( 'admin_main_content', 'adco_cta_1_config', 25 );
  add_action( 'admin_main_content', 'adco_about_section_config', 30 );
  add_action( 'admin_main_content', 'adco_theme_section_config', 35 );
  add_action( 'admin_main_content', 'adco_contact_modal_config', 40 );

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
