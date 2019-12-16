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
  function openService(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    console.log(cityName);
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
