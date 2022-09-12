
$(document).ready(function () {
  $('.your-class').slick({
    autoplay: true,
    arrows: true,
    infinite: true,
    speed: 1250,
    fade: true,
    cssEase: 'ease-in-out'
  })
});
$('[data-fancybox="gallery"]').fancybox({
  infobar: true,
  caption: function (instance, item) {
    var caption = $(this).data('caption') || '';
    return (caption.length ? caption + '<br />' : '') + 'Imagem <span data-fancybox-index></span> de <span data-fancybox-count></span>';
  }
});
$(function () {
  $('#menuListContainer').accordion({
    collapsible: true,
    active: false,
    heightStyle: "content"
  });
});


let aboutPos = $("#about").offset().top;
let arrow = $(".upArrow");

$(window).on("scroll", function () {
  let body = document.body,
    html = document.documentElement,
    height = Math.max(body.scrollHeight, body.offsetHeight,
      html.clientHeight, html.scrollHeight, html.offsetHeight),
    scrolledPx = window.pageYOffset,
    percentNumber = Math.floor((scrolledPx / height) * 100 + 14);

  if (percentNumber > 20) {
    arrow.removeClass("arrowOff").addClass("arrowOn");
  } else {
    arrow.removeClass("arrowOn").addClass("arrowOff");
  }

})

//simple parallax plugin
var image = document.getElementsByClassName('parallax');
new simpleParallax(image, {
  delay: .5,
  transition: 'cubic-bezier(0,0,0,1)'
});






//evento click nos links (muda as classes e cria efeito scroll)
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000)
      }
    }
  });  //final da funcao perfeita de smooth scrolling @ CSS Tricks


//function para alinhar o accordion seleccionado  
$("h5").on("click", function () {
  var targetAccordion = $(this).next();
  setTimeout(function () {
    $('html,body').animate({
      scrollTop: targetAccordion.offset().top - 100
    }, 500);
  }, 300);
})
//end function para alinhar o accordion seleccionado