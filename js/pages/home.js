jQuery(document).ready(function() {

  /**
   * Velocity Animations
   */
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


  /**
   * Home Animations
   */
  function titlesFade() {
    jQuery('.home-section.hero .fadeTitle').delay(3000)
     .velocity(fadeDown.start, fadeDown.o.slow)
     .velocity(fadeDown.end, fadeDown.o.fast);
    jQuery('.home-section.hero .fadeSubtitle').delay(3000)
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
  function heroFolders() {
    jQuery('.hero-horizontal').delay(300)
    .velocity(fadeRight.start, fadeRight.o.slow)
    .velocity(fadeRight.end, fadeRight.o.fast);
    jQuery('.hero-vertical').delay(600)
    .velocity(fadeRight.start, fadeRight.o.slow)
    .velocity(fadeRight.end, fadeRight.o.fast);
  }
  function heroTags() {
    jQuery('.hero-tag.back').delay(300)
    .velocity(fadeUp.start, fadeUp.o.slow)
    .velocity(fadeUp.end, fadeUp.o.fast);
    jQuery('.hero-tag.front').delay(300)
    .velocity(fadeRight.start, fadeRight.o.slow)
    .velocity(fadeRight.end, fadeRight.o.fast);
    jQuery('.hero-tag.icon-top').delay(600)
    .velocity(fadeDown.start, fadeDown.o.slow)
    .velocity(fadeDown.end, fadeDown.o.fast);
    jQuery('.hero-tag.icon-btm').delay(600)
    .velocity(fadeUp.start,fadeUp.o.slow)
    .velocity(fadeUp.end, fadeUp.o.fast);
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
    heroFolders();
    heroTags();
  }
  function homeSequence() {

    // Hero Banner Titles
    titlesFade();

    // Animate Browser
    browserGen();
  }

  // Start Home Sequence
  homeSequence();
  
  function openService(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
});
