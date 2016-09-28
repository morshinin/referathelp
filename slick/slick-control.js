
jQuery(document).ready(function(){
  jQuery('.services_carousel').slick({
    dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 6,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });
});