(function($) {
  jQuery(document).ready(function() {
    home.init();

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
 * Initialize Home Page
 */
  var home = {
    init: function() {
      this.browser();
      setTimeout(function() {
        home.titleFade();
      }, 3000);
    },
    browser: function() {
      this.browserGen();
      this.heroFolders();
      this.heroTags();
      setTimeout(function() {
        home.heroRows();
        home.heroBtns();
      }, 1000);  
    },
    fadeDown: function(selector) {
      jQuery(selector).velocity(fadeDown.start, fadeDown.o.slow)
      .velocity(fadeDown.end, fadeDown.o.fast);
    },
    fadeUp: function(selector) {
      jQuery(selector).velocity(fadeUp.start, fadeUp.o.slow)
      .velocity(fadeUp.end, fadeUp.o.fast);
    },
    fadeRight: function(selector) {
      jQuery(selector).velocity(fadeRight.start, fadeRight.o.slow)
      .velocity(fadeRight.end, fadeRight.o.fast);
    },
    titleFade: function() {
      home.fadeDown('.home-section.hero .fadeTitle');
      home.fadeUp('.home-section.hero .fadeSubtitle');
    },
    heroRows: function() {
      home.fadeRight('.hero-row.delay-3');
      setTimeout(function() {
        home.fadeRight('.hero-row.delay-6');
      }, 300);
      setTimeout(function() {
        home.fadeRight('.hero-row.delay-9');
      }, 600);
      setTimeout(function() {
        home.fadeRight('.hero-row.delay-12');
      }, 900);
    },
    heroBtns: function() {
      home.fadeDown('.hero-btn.delay-3')
      setTimeout(function() {
        home.fadeDown('.hero-btn.delay-6');
      }, 300);
      setTimeout(function() {
        home.fadeDown('.hero-btn.delay-9');
      }, 600);
    },
    heroFolders: function() {
      home.fadeRight('.hero-horizontal');
      setTimeout(function() {
        home.fadeRight('.hero-vertical');
      }, 300);
    },
    heroTags: function() {
      home.fadeUp('.hero-tag.back');
      home.fadeRight('.hero-tag.front');
      setTimeout(function() {
        home.fadeDown('.hero-tag.icon-top');
        home.fadeUp('.hero-tag.icon-btn');
      }, 300)
    },
    browserGen: function() {
      home.fadeUp('#hero-icon .background');
      home.fadeDown('#hero-icon .menu');
      home.fadeUp('#hero-icon .bar');
      home.fadeUp('#hero-icon .body');
      home.fadeDown('#hero-icon .start');
    }
  }
})(jQuery)
