var iframe = document.querySelectorAll('iframe');
var img = document.querySelectorAll('img');
var video = document.querySelectorAll('video');
var openNavBtn = document.querySelector("#navBtn");
var navbar = document.querySelector('.navbar');
var closeNavBtn = document.querySelector('#navbarClose');
var htmlWrapper = document.querySelector('.wrapper');
var carouselList = document.querySelector('.carousel__list');
var sliderHome = document.querySelector('.slick__slider');
var carouselAboutUs = document.querySelector('.page__carousel');
var filterShowBtn = document.querySelector('.product__filter-title .btn');
var filterShowBtnIcon = document.querySelector('.product__filter-title .btn .fas');
var priceSliderValue = document.querySelector('#priceSliderValue');
var priceSliderValueRange = document.querySelector('#priceSliderValueRange');
var filterListMenu = document.querySelector('.product__filter-list');
var productBrandFilter = document.querySelectorAll('input[name="productBand"]');
var productBrandFilterLabel = document.querySelectorAll('.productBand');
var productKindFilter = document.querySelectorAll('input[name="productKind"]');
var productKindFilterLabel = document.querySelectorAll('.productKind');
var productSexFilter = document.querySelectorAll('input[name="productSex"]');
var productSexFilterLabel = document.querySelectorAll('.productSex');
var productSizeFilter = document.querySelectorAll('input[name="productSize"]');
var productSizeFilterLabel = document.querySelectorAll('.productSize');
var sortProductFilter = document.querySelectorAll('input[name="sortProduct"]');
var sortProductFilterLabel = document.querySelectorAll('.sortProduct');
// auto LazyLoad img and video
function iframeResposive(){
  for (i = 0; i < iframe.length; i++) {
      iframe[i].classList.add('lazy');
  }
}
function imgResposive(){
  for (i = 0; i < img.length; i++) {
      img[i].classList.add('lazy');
  }
}
function videoResposive(){
  for (i = 0; i < video.length; i++) {
      video[i].classList.add('lazy');
  }
}
iframe ? iframeResposive(): {};
img ? imgResposive(): {};
video ? videoResposive():{};
var lazyLoadInstance = new LazyLoad({elements_selector: ".lazy"});

openNavBtn ? openNavBtn.onclick = function(){
  navbar.classList.add('active');
  htmlWrapper.classList.add('active');
}:{};
closeNavBtn ? closeNavBtn.onclick = function(){
    navbar.classList.remove('active');
    htmlWrapper.classList.remove('active');
}:{};
// Filter action
filterShowBtn ? filterShowBtn.onclick= function(){
  filterShowBtnIcon.classList.toggle('fa-angle-down');
  filterShowBtnIcon.classList.toggle('fa-angle-up');
  filterShowBtn.classList.toggle('main--background');
  filterListMenu.classList.toggle('active');
}:{};
priceSliderValueRange ? priceSliderValueRange.oninput = function(){
  priceSliderValue.innerHTML = this.value;
}:{};
// function actionFilter(arrayFilter,arrayLabel){
//   for(var i = 0; i < arrayFilter.length ; i++){
//     arrayFilter[i].onclick = function(){
//       for(var t = 0; t < arrayLabel.length; t++){
//         arrayLabel[t].classList.remove('active');
//       }
//       arrayLabel[i].classList.add('active');
//     }
//   }
// }
function actionFilter(arrayFilter,arrayLabel) {
  arrayFilter.forEach(function (item, i) {
    item.onclick = function () {
      arrayLabel.forEach(function (item) {
        item.classList.remove('active');
      });
      arrayLabel[i].classList.add('active');
    };
  });
}
productBrandFilter ? actionFilter(productBrandFilter,productBrandFilterLabel):{};
productKindFilter ? actionFilter(productKindFilter,productKindFilterLabel):{};
productSexFilter ? actionFilter(productSexFilter,productSexFilterLabel):{};
productSizeFilter ? actionFilter(productSizeFilter,productSizeFilterLabel):{};
sortProductFilter ? actionFilter(sortProductFilter,sortProductFilterLabel):{};
//Carousel slick
carouselList ?
$('.carousel__list').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
}) :{};
carouselAboutUs ? $('.page__carousel').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
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
}) :{};
sliderHome ?
$('.slick__slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 5000,
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
}) :{};
