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

   // Animations
   var fadeDown = {
     start: {
       translateY: -20,
     },
     end: {
       translateY: 0,
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
   }
   var fadeUp = {
     start: {
       translateY: 20
     },
     end: {
       translateY: 0,
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
   var fadeRight = {
     start: {
       translateX: "-40px"
     },
     end: {
       translateX: "0px",
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
   function titlesFade() {
     jQuery('.home-section.hero .fadeTitle').delay(1000)
      .velocity(fadeDown.start, fadeDown.o.slow)
      .velocity(fadeDown.end, fadeDown.o.fast);
     jQuery('.home-section.hero .fadeSubtitle')
      .velocity(fadeUp.start, fadeUp.o.slow)
      .velocity(fadeUp.end, fadeUp.o.fast);
   }
   function heroRows() {
     // Rows
     jQuery('.hero-row.delay-3').delay(1300)
     .velocity(fadeRight.start, fadeRight.o.slow)
     .velocity(fadeRight.end, fadeRight.o.fast);
     jQuery('.hero-row.delay-6').delay(1600)
     .velocity(fadeRight.start, fadeRight.o.slow)
     .velocity(fadeRight.end, fadeRight.o.fast);
     jQuery('.hero-row.delay-9').delay(1900)
     .velocity(fadeRight.start, fadeRight.o.slow)
     .velocity(fadeRight.end, fadeRight.o.fast);
     jQuery('.hero-row.delay-12').delay(2200)
     .velocity(fadeRight.start, fadeRight.o.slow)
     .velocity(fadeRight.end, fadeRight.o.fast);
   }
   function heroBtns() {
     jQuery('.hero-btn.delay-3').delay(1300)
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);
     jQuery('.hero-btn.delay-6').delay(1600)
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);
     jQuery('.hero-btn.delay-9').delay(1900)
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);
   }
   function browserGen() {
     jQuery('#hero-icon .background')
     .velocity(fadeUp.start, fadeUp.o.slow)
     .velocity(fadeUp.end, fadeUp.o.fast);
     // ContainerswDdAw
     jQuery('#hero-icon .menu')
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);
     jQuery('#hero-icon .bar')
     .velocity(fadeUp.start, fadeUp.o.slow)
     .velocity(fadeUp.end, fadeUp.o.fast);
     jQuery('#hero-icon .body')
     .velocity(fadeUp.start, fadeUp.o.slow)
     .velocity(fadeUp.end, fadeUp.o.fast);
     jQuery('#hero-icon .start')
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);

     heroRows();
     heroBtns();
   }
   function homeSequence() {

     // Hero Banner Titles
     titlesFade();

     // Animate Browser
     browserGen();
   }
   homeSequence();

   // jQuery('.hero-row').velocity(fadeRows.start, fadeRows.o.fast, function() {
   //
   // };

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
