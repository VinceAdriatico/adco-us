<?php
/**
 * ADCO Core Functions
 *
 * @version 1.0.0
 * @package adco
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }

 /**
  * Load Core Functions
  */

  // General Functions
  include ADCO_INC . 'adco-general-functions.php';

  // Theme Configurations
  include ADCO_INC . 'adco-theme-options.php';

  // Theme Functions
  include ADCO_INC . 'adco-theme-configurations.php';

  // Front Options
  include ADCO_INC . 'adco-front-options.php'; 

  // Template Functions
  include ADCO_INC . 'adco-template-functions.php';

  // Template Hooks
  include ADCO_INC . 'adco-template-hooks.php';

  // Shortcodes
  include ADCO_INC . 'adco-shortcodes.php';
