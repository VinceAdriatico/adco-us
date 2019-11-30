jQuery(document).ready(function() {
  jQuery(".button-collapse").sideNav();

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
});
