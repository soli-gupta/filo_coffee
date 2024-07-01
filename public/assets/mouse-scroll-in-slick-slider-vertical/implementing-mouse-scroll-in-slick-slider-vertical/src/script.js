const slider = $(".slider");
// Animation
$('.slider').on('init', function(e, slick) {
  var $firstAnimatingElements = $('div.slick-slide:first-child').find('[data-animation]');
  doAnimations($firstAnimatingElements);    
});
$('.slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
  var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
  doAnimations($animatingElements); 
});

// Slider Main Settings
slider
  .slick({
    dots: true,
    arrows: false,
    vertical: true,
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

// Animation
function doAnimations(elements) {
  var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  elements.each(function() {
    var $this = $(this);
    var $animationDelay = $this.data('delay');
    var $animationType = 'animated ' + $this.data('animation');
    $this.css({
      'animation-delay': $animationDelay,
      '-webkit-animation-delay': $animationDelay
    });
    $this.addClass($animationType).one(animationEndEvents, function() {
      $this.removeClass($animationType);
    });
  });
};

