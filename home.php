<?php
/**
 * Home Page Template
 *
 * The default page template for the posts index
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package active-g
 */

 if( ! defined( 'ABSPATH' ) ) {
    exit;
 }

  /**
   * Header Template Part
   */
   get_header();

   /**
    * Before Archive Page Main
    *
    * @action_hook before_archive_page_main
    */
    do_action( 'before_blog_page_main' );

    /**
     * Check if any posts
     */
    if( have_posts() ) :

   ?>
<!--- Main Content --->
 <div id="primary" class="content-area">
   <main id="main" class="site-main blog">

     <?php
     /**
      * Before Archive Page Loop
      *
      * @action_hook before_archive_page_loop
      *
      */
      do_action( 'before_blog_page_loop' );

     /**
      * Start the Loop
      */
      while( have_posts() ) :
        the_post();
        /**
         * Before Archive Page Item
         *
         * @action_hook before_archive_page_item
         *
         */
         do_action( 'before_blog_page_item' );


         /**
          * Archive Page Item
          */
          do_action( 'blog_page_item' );

        /**
         * After Archive Page Item
         *
         * @action_hook after_archive_page_item
         *
         */
         do_action( 'after_blog_page_item' );

        endwhile; // End the Loop

        /**
         * Post Navigation
         */
         the_posts_navigation();

         /**
          * After Blog Page Loop
          *
          * @action_hook after_archive_page_loop
          *
          */
          do_action( 'after_blog_page_loop' ); ?>
    </main>
  </div>
<?php
    else:
    /**
     * Before No Posts Found
     *
     * @action_hook before_no_posts
     */
     do_action( 'before_no_posts' );

      /**
       * No Posts Found
       */
       get_template_part( 'template-parts/content', 'none' );

   /**
    * After No Posts Found
    *
    * @action_hook after_no_posts
    *
    */
    do_action( 'after_no_posts' );

    endif;

/**
 * After Archive Page Main
 *
 * @action_hook after_archive_page_main
 */
 do_action( 'after_archive_page_main' );

/**
 * Footer Template Part
 */
 get_footer();
