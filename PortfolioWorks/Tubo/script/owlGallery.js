$(document).ready(function() {
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    center: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    animateOut: 'fadeOutRightBig',
    animateIn: 'fadeInLeftBig',    
    smartSpeed:350
  }); //end owl Carousel init
}); //end document ready function
