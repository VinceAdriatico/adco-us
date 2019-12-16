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
  add_action( 'admin_main_content', 'adco_main_section_config', 10 );
  add_action( 'admin_main_content', 'adco_product_section_config', 15 );
  add_action( 'admin_main_content', 'adco_about_section_config', 30 );
  add_action( 'admin_main_content', 'adco_feature_section_config', 35 );
  add_action( 'admin_main_content', 'adco_contact_section_config', 40 );


 /**
  * Main Content
  */
  add_action( 'main_content', 'adco_hero_banner', 5 );
  add_action( 'main_content', 'open_adco_home_container', 10 );
  add_action( 'main_content', 'adco_main_section', 15 );
  add_action( 'main_content', 'adco_feature_section', 20 );
  add_action( 'main_content', 'adco_contact_section', 45 );
  add_action( 'main_content', 'close_adco_home_container', 50 );
  add_action( 'main_content', 'adco_inline_jquery', 55 );

  /**
   * Main Section
   */
   add_action( 'adco_main_section', 'adco_product_section', 5 );
   add_action( 'adco_main_section', 'adco_about_section', 10 );

  /**
   * Default Page Content
   */
   add_action( 'default_page_content', 'adco_general_header', 5 );
   add_action( 'default_page_content', 'adco_breadcrumbs', 10 );
   add_action( 'default_page_content', 'adco_container_wrap', 15 );
   add_action( 'default_page_content', 'adco_content', 20 );
   add_action( 'default_page_content', 'adco_container_close', 30 );

   /**
    * Single Post
    */
    add_action( 'content_single_post', 'adco_general_header', 5 );
    add_action( 'content_single_post', 'adco_breadcrumbs', 10 );
    add_action( 'content_singel_post', 'adco_open_post', 15 );
    add_action( 'content_single_post', 'adco_content', 20 );
    add_action( 'content_single_post', 'adco_sidebar', 25 );
    add_action( 'content_single_post', 'adco_close_post', 30 );

    /**
     * Blog Page
     */
     add_action( 'before_blog_page_loop', 'adco_blog_header', 5 );
     add_action( 'before_blog_page_loop', 'adco_breadcrumbs', 5 );
     add_action( 'before_blog_page_loop', 'adco_open_archive', 15 );
     add_action( 'blog_page_item', 'adco_blog_item', 15 );
     add_action( 'after_blog_page_loop', 'adco_close_archive', 20 );

     /**
      * Archive Page
      */
      add_action( 'before_archive_page_loop', 'adco_archive_header', 5 );
      add_action( 'before_archive_page_loop', 'adco_breadcrumbs', 5 );
      add_action( 'before_archive_page_loop', 'adco_open_archive', 10 );
      add_action( 'archive_page_item', 'adco_archive_item', 15 );
      add_action( 'after_archive_page_loop', 'adco_close_archive', 5 );
      add_action( 'after_archive_page_loop', 'adco_sidebar', 10 );

      /**
       * Search Page
       */
       add_action( 'before_search_page_loop', 'adco_open_archive', 5 );
       add_action( 'aftter_search_page_loop', 'adco_close_archive', 5 );

      /**
       * 404 Page
       */
       add_action( 'error_page', 'adco_error_header', 5 );
