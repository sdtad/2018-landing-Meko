$(function(){

$('.btn-menu').on('click', function(){
 $('.nav ul').slideToggle();
});


$('.slider-inner').slick({
  dots: true,
  prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
  nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 980,
      settings: {
        arrows: false,
        dots: true
      }
    }
    ]
});






});