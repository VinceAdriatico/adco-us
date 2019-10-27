<?php
/**
 * ADCO.us - Inline JQuery
 *
 * Template for Home Page
 *
 * @version 1.0.0
 * @package adco-us
 */

 if( ! defined( 'ABSPATH' ) ) {
   exit;
 }
 ?>
 <script>
 jQuery(document).ready(function() {
   jQuery('.slick-main').slick({
     slidesToShow: 3,
     dots: false,
     responsive: [
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           prevArrow: jQuery('.slickprev'),
           nextArrow: jQuery('.slick-next'),
         }
       }
     ]
   });
 });
 </script>
