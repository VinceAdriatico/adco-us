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

  /**
   * Default Page Content
   */
   add_action( 'default_page_content', 'adco_general_header', 5 );
   add_action( 'default_page_content', 'adco_breadcrumbs', 10 );
   add_action( 'default_page_content', 'adco_content', 15 );
   add_action( 'default_page_content', 'adco_sidebar', 20 );

   /**
    * Single Post
    */
    add_action( 'content_single_post', 'adco_general_header', 5 );
    add_action( 'content_single_post', 'adco_breadcrumbs', 10 );
    add_action( 'content_single_post', 'adco_content', 15 );
    add_action( 'content_single_post', 'adco_sidebar', 20 );

    /**
     * Blog Page
     */
     add_action( 'before_blog_page_loop', 'adco_blog_header', 5 );
     add_action( 'blog_page_item', 'adco_open_archive', 5 );
     add_action( 'blog_page_item', 'adco_blog_item', 10 );
     add_action( 'blog_page_item', 'adco_close_archive', 15 );

     /**
      * Archive Page
      */
      add_action( 'before_archive_page_loop', 'adco_archive_header', 5 );
      add_action( 'archive_page_item', 'adco_open_archive', 5 );
      add_action( 'archive_page_item', 'adco_archive_item', 10 );
      add_action( 'archive_page_item', 'adco_close_archive', 15 );
      add_action( 'after_archive_page_item', 'adco_sidebar', 5 );

      /**
       * 404 Page
       */
       add_action( 'error_page', 'adco_error_header', 5 );
