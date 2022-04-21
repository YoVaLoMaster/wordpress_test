/* Custom JS to initialize carousels and sliders */

jQuery(document).ready(function ($) {



  //SLIDER SERVICIOS 

    //para tamaños pequeños de pantalla
    $('.slider-servicios').slick({
      infinite: true,
      speed: 300,
      autoplaySpeed: 3500,
      autoplay: true,
      slidesToScroll: 1,
      slidesToShow: 1,
      arrows: false,
      fade: false,
      dots: false,
      variableWidth:false,
      centerMode: false,
      focusOnSelect:true,
      responsive: [{
        breakpoint: 992,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
    $('.arrow-right').on('click', function (e) {
      $('.slider-servicios').slick('slickNext');
    });
    $('.arrow-left').on('click', function (e) {
      $('.slider-servicios').slick('slickPrev');
    });


});


Chocolat(document.querySelectorAll('.lightboxxx'), {
  container: document.querySelector('.chocolat-lightboxx'),
  loop: true,
  imageSize: 'contain',
  // ...
})

