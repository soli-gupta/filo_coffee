const slider = $(".slider");
// Slider Main Settings
slider
  .slick({
    dots: true,
    arrows: false,
    vertical: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 1
        } 
    //speed: 1000,
    //fade: true,
    //cssEase: 'linear'
  });


// Vertical Mouse Scroll
slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    $(this).slick('slickNext');
  } else {
    $(this).slick('slickPrev');
  }
}));
