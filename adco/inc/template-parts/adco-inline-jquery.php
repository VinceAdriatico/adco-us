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
     autoplay: true,
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
   // Animations
   var fadeIn = {
     p: {
       opacity: 1
     },
     o: {
       fast: {
         duration: 1000,
         easing: "linear"
       },
       slow: {
         duration: 3000,
         easing: "linear"
       }
     }
   };
   var fadeRows = {
     p: {
       opacity: 1,
       translate3d: "0,0,0"
     }
   };
   jQuery('#test').velocity(fadeIn.p, fadeIn.o.fast);
   jQuery('.hero-row').velocity(fadeRows.p, fadeIn.o.slow);
   // // Get the modal
   // var modal = document.getElementById("contactModal");
   //
   // // Get the button that opens the modal
   // var btn = document.getElementById("modal-toggle");
   //
   // // Get the <span> element that closes the modal
   // var span = document.getElementsByClassName("close")[0];
   //
   // // When the user clicks on the button, open the modal
   // btn.onclick = function() {
   //   modal.style.display = "block";
   // }
   //
   // // When the user click  s on <span> (x), close the modal
   // span.onclick = function() {
   //   modal.style.display = "none";
   // }
   //
   // // When the user clicks anywhere outside of the modal, close it
   // window.onclick = function(event) {
   //   if (event.target == modal) {
   //     modal.style.display = "none";
   //   }
   // }
 });
 </script>
