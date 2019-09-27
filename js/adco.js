jQuery(document).ready(function() {
  jQuery('.slick-3').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    centerMode: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1
        }
      }
    ]
  })
})
