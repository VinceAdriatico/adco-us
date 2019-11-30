<?php
/**
 * ADCO.us - Minified CLass
 *
 * @version 1.0.0
 * @package adco
 */

 /**
  * Load Minifier
  */
  require_once get_template_directory() . '/minify-master/src/Minify.php';
  require_once get_template_directory() . '/minify-master/src/CSS.php';
  require_once get_template_directory() . '/minify-master/src/JS.php';
  require_once get_template_directory() . '/minify-master/src/Exception.php';
  require_once get_template_directory() . '/minify-master/src/Exceptions/BasicException.php';
  require_once get_template_directory() . '/minify-master/src/Exceptions/FileImportException.php';
  require_once get_template_directory() . '/minify-master/src/Exceptions/IOException.php';
  require_once get_template_directory() . '/path-converter-master/src/ConverterInterface.php';
  require_once get_template_directory() . '/path-converter-master/src/Converter.php';


  use MatthiasMullie\Minify;

  class ADCO_Minified {
    public function css_core() {
      $minifiedpath = get_template_directory() . '/css/minified.css';

      /**
       * Local Scripts
       */
       // $style = get_template_directory() . 'style.css';
       $adco = get_template_directory() . '/css/adco.css';
       $import = get_template_directory() . '/css/import.css';
       $materialize = get_template_directory() . '/materialize/css/materialize.css';
       $slick = get_template_directory() . '/slick/slick.css';

       $minifier = new Minify\CSS( $adco, $import );
       $minifier->add( $materialize );
       $minifier->add( $slick );
       $minifier->minify( $minifiedpath );
    }

    public function js_core() {
      $minifiedpath = get_template_directory() . '/js/minified.js';
      /**
       * Local Scripts
       */
       $adco = get_template_directory() . '/js/adco.js';
       $import = get_template_directory() . '/js/import.js';
       $materialize = get_template_directory() . '/materialize/js/materialize.min.js';
       $slick = get_template_directory() . '/slick/slick.js';
       $velocity = get_template_directory() . '/velocity-master/velocity.js';
       $ui = get_template_directory() . '/velocity-master/velocity.ui.js';
       $lazy = get_template_directory() . '/lazyload-2.x/lazyload.js';

       $minifier = new Minify\JS( $materialize );
       $minifier->add( $import );
       $minifier->add( $adco );
       $minifier->add( $slick );
       $minifier->add( $lazy );
       $minifier->minify( $minifiedpath );
    }
  }
