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

 add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

 function mycustom_wpcf7_form_elements( $form ) {
 $form = do_shortcode( $form );

 return $form;
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

 /**
  * Add Excerpt to pages
  */
  add_post_type_support( 'excerpt', 'page' );

/**
 * Add Footer Main
 */
 function register_footer_main() {
   register_sidebar( array(
     'name'           => esc_html__( 'Footer Main', 'adco' ),
     'id'             => 'footer-main',
     'description'    => esc_html__( 'Add Widgets here', 'adco' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
   ) );
 }
 add_action( 'after_setup_theme', 'register_footer_main' );

 /**
  * Add Default Sidebar
  */
  function register_default_sidebar() {
    register_sidebar( array(
      'name'          => esc_html__( 'Default Sidebar', 'adco' ),
      'id'            => 'default-sidebar',
      'description'    => esc_html__( 'Add Widgets here', 'adco' ),
      'before_widget' => '<div id="%1$s" class="collection widget %2$s">',
   		'after_widget'  => '</div>',
   		'before_title'  => '<h2 class="widget-title">',
   		'after_title'   => '</h2>',
    ) );
  }

/**
 * Enqueue Admin Scripts
 */
 function admin_core_files( $hook ) {

   /** Only load on plugin pages **/
   $theme = 'theme-settings_page_primary_ext';
   $front = 'theme-settings_page_front_ext';
   $options = array( $theme, $front );
   $com = in_array( $hook, $options );

   if( $com != true ) {
     return;
   }


   // Include Minified Class
   include ADCO_INC . 'class-minified.php';

   $a = new ADCO_Minified();
   $a->css_core();
   $a->js_core();

   // Minify Stylesheet
   wp_register_style( 'minify-css', get_template_directory_uri() . '/css/minified.css', array(), '1.0.0', false );
   wp_enqueue_style( 'minify-css' );

   // Minify Script
   wp_register_script( 'minify-js', get_template_directory_uri() . '/js/minified.js', 'jquery', '1.0.0', false );
   wp_enqueue_script( 'minify-js' );

   // Admin CSS / JS
   wp_register_style( 'admin-css', get_template_directory_uri() . '/css/admin.css', array(), '1.0.0', false );
   wp_register_script( 'admin-js', get_template_directory_uri() . '/js/admin.js', array(), '1.0.0', false );
   wp_enqueue_script( 'admin-js' );

   // Register Admin CSS
   wp_enqueue_style(
       'admin-css',
       get_template_directory_uri() . '/css/admin.css'
   );
   $materialBox = "
       .material-box-shadow {
           box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
       }";
   wp_add_inline_style( 'admin-css', $materialBox );
 }
 add_action( 'admin_enqueue_scripts', 'admin_core_files' );

/**
 * Initialize custom post type for Company Features
 */
 function latest_projects() {
   $args = array(
     'label'            => 'Latest Projects',
     'public'           => true,
     'show_ui'          => true,
     'show_in_menu'     => 'adco_options',
     'has_archive'      => true,
     'hierarchical'     => false,
     'rewrite'          => array( 'slug'  => 'latest-project' ),
     'query_var'        => true,
     'menu_icon'        => 'dashicons-images-alt',
     'supports'         => array(
       'title',
       'editor',
       'excerpt',
       'thumbnail',
       'page-attributes', ) );
     register_post_type( 'latest_project', $args );
 }
 add_action( 'init', 'latest_projects' );

 /**
  * Add Post Meta for Latest Projects
  */
  function add_post_meta_projects() {
    add_meta_box(
      'latest_projects_meta',       // ID of Metabox
      'Additional',               // TItle of Metabox
      'run_project_meta',         // Callback
      'latest_project',             // Type of Post
      'side',                     // Location on Page
      'high'                       // Priority
    );
  }
  add_action( 'add_meta_boxes', 'add_post_meta_projects' );

  function run_project_meta( $post ) {
    /**
     * Create Nonce
     */
     wp_nonce_field( basename(__FILE__), 'meta_box_project_nonce' );

     /**
      * Get Post Meta
      */
      $cta = get_post_meta( $post->ID, '_page', true );
      $external = get_post_meta( $post->ID, '_external', true );

      $pages = get_pages();
      ?>
      <div class="inside">
        <fieldset>
          <legend>CTA Page</legend>
          <select name="page" style="width: 100%">
            <?php
            foreach( $pages as $page ) { ?>
            <option value="<?php echo $page->ID; ?>" <?php selected( $cta, $page->ID ); ?>>
              <?php echo $page->post_title; ?>
            </option>
            <?php
              }
            ?>
          </select>
          <legend>External Page</legend>
          <input type="url" name="external" value="<?php echo esc_url( $external ); ?>" />
        </fieldset>
      </div>
  <?php
  }

  function latest_project_meta( $post_id ) {
    /**
     * Verify Nonce
     */
     if( ! isset( $_POST['meta_box_project_nonce'] ) || ! wp_verify_nonce( $_POST['meta_box_project_nonce'], basename(__FILE__) ) ) {
       return;
     }

     /**
      * Disable if autosave
      */
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
      }

      /**
       * Verify Capabilities
       */
       if( ! current_user_can( 'edit_post', $post_id ) ) {
         return;
       }

       /**
        * Update Post Meta
        */
        if( isset( $_REQUEST['page'] ) ) {
          update_post_meta( $post_id, '_page', sanitize_text_field( $_POST['page'] ) );
        }
        if( isset( $_REQUEST['external'] ) ) {
          update_post_meta( $post_id, '_external', sanitize_text_field( $_POST['external'] ) );
        }
  }
  add_action( 'save_post', 'latest_project_meta' );

/**
 * Initialize Custom Post Type for Featured Services
 */
 function featured_services() {
   $args = array(
     'label'            => 'Featured Services',
     'public'           => true,
     'show_ui'          => true,
     'show_in_menu'     => 'adco_options',
     'has_archive'      => true,
     'hierarchical'     => false,
     'rewrite'          => array( 'slug'  => 'featured-service' ),
     'query_var'        => true,
     'menu_icon'        => 'dashicons-images-alt',
     'supports'         => array(
       'title',
       'editor',
       'excerpt',
       'thumbnail',
       'page-attributes', ) );
     register_post_type( 'featured_service', $args );
  }
   add_action( 'init', 'featured_services' );

 /**
  * Add Post Meta for Featured Services
  */
  function add_post_meta_features() {
    add_meta_box(
      'core_features_meta',         // ID of Metabox
      'CTA',                        // Title of Metabox
      'run_feature_meta',           // Callback
      'featured_service',           // Type of Post
      'side',                       // Location on Page
      'high'                        // Priority
    );
  }
  function run_feature_meta( $post ) {
    /**
     * Create Nonce
     */
     wp_nonce_field( basename(__FILE__), 'meta_box_feature_nonce' );

     /**
      * Get Post Meta
      */
      $cta = get_post_meta( $post->ID, '_page',  true );

      $pages = get_pages();
      ?>
      <div class="inside">
        <fieldset>
          <legend>CTA Page</legend>
          <select name="page" style="width: 100%">
            <?php foreach( $pages as $page ) { ?>
              <option value="<?php echo $page->ID; ?>" <?php selected( $cta, $page->ID ); ?>>
                <?php echo $page->post_title; ?>
              </option>
              <?php } ?>
          </select>
        </fieldset>
      </div>
  <?php
  }
  function core_feature_meta( $post_id ) {
    /**
     * Verify Nonce
     */
     if( ! isset( $_POST['meta_box_feature_nonce'] ) || ! wp_verify_nonce( $_POST['meta_box_feature_nonce'], basename(__FILE__) ) ) {
       return;
     }

     /**
      * Disable if Autosave
      */
      if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
      }

      /**
       * Verify Capabilities
       */
       if( ! current_user_can( 'edit_post', $post_id ) ) {
         return;
       }

       /**
        * Update Post Meta
        */
        if( isset( $_REQUEST['page'] ) ) {
          update_post_meta( $post_id, '_page', sanitize_text_field( $_POST['page'] ) );
        }
  }
  add_action( 'save_post', 'core_feature_meta' );


 /**
  * Initialize Custom Post Type for Core Process
  */
  function core_processes() {
    $args = array(
      'label'           => 'Core Processes',
      'public'          => true,
      'show_ui'         => true,
      'show_in_menu'     => 'adco_options',
      'has_archive'      => true,
      'hierarchical'     => false,
      'rewrite'          => array( 'slug'  => 'core-process' ),
      'query_var'        => true,
      'menu_icon'        => 'dashicons-images-alt',
      'supports'         => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'page-attributes', ) );
        register_post_type( 'core_processes', $args );
  }
  add_action( 'init', 'core_processes' );
