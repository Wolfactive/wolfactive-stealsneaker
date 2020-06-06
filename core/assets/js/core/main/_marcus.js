$('.newspaper_content_slick').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

$('.slider_product_big').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  adaptiveHeight: true,
  asNavFor: '.slider_product_small'
});
$('.slider_product_small').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider_product_big',
  dots: true,
  centerMode: true,
  adaptiveHeight: true,
  focusOnSelect: true
});

if(window.location.pathname === "/trang-404"){
    setTimeout(function(){ window.location.href = protocol + "//" + hostname }, 5000);
}