<?php
/**
 * ADCO.us - Analytics
 *
 * Analytics template for header
 *
 * @package adco-us
 * @version 1.0.0
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }
 ?>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130661039-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130661039-1');
</script>
<h1>Test</h1>
