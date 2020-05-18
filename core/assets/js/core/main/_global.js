var iframe = document.querySelectorAll('iframe');
var img = document.querySelectorAll('img');
var video = document.querySelectorAll('video');
var openNavBtn = document.querySelector("#navBtn");
var navbar = document.querySelector('.navbar');
var closeNavBtn = document.querySelector('#navbarClose');
var htmlWrapper = document.querySelector('.wrapper');
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
$('.carousel__list').slick();
