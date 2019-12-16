jQuery(document).ready(function() {

  /**
   * Materialize
   */
  jQuery(".button-collapse").sideNav();

  /**
   * Slick Slider
   */
  jQuery('.slick-main').slick({
    slidesToShow: 3,
    dots: false,
    arrows: false,
    autoplay: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          speed: 1000,
          prevArrow: jQuery('.slickprev'),
          nextArrow: jQuery('.slick-next'),
        }
      }
    ]
  });
});
