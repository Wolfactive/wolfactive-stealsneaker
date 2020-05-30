$('.newspaper_content_slick').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
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
  asNavFor: '.slider_product_small'
});
$('.slider_product_small').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider_product_big',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

var inputCT = document.getElementById('qualityCT');
var minusCT = document.getElementById('minusCT');
var plusCT = document.getElementById('plusCT');
minusCT ? minusCT.onclick = function (){if(inputCT.value > 1){inputCT.value--;}} :{};
plusCT ? plusCT.onclick = function (){inputCT.value++;}: {};

$(document).ready(function(){
  var url = protocol + "//" + hostname + "/steal-sneaker/wp-content/themes/wolfactive-stealsneaker/core/assets/js/json/local.json";
  fetch(url , {
    method: 'GET'
  }).then(function(result) {
    return result.json();
  })
  .then(function(result) {
    console.log(result);
    var cityOption = "";
    result.forEach(function(element,i) {
      cityOption += "<option value=\""+ result[i].name +"\">"+ result[i].name +"</option>\n";
    });
    document.getElementById("cityNameChoose").innerHTML = cityOption;

  }).catch(function(err) {});
});
function cityChange(obj){
  var url = protocol + "//" + hostname + "/steal-sneaker/wp-content/themes/wolfactive-stealsneaker/core/assets/js/json/local.json";
  fetch(url , {
    method: 'GET'
  }).then(function(result) {
    return result.json();
  })
  .then(function(result) {
    console.log(obj.value);
    var countryOption = "";
    result.forEach(function(element,i) {
      if(obj.value === result[i].name){
        var allDistricts = result[i].districts;
        allDistricts.forEach(function(e, index){
          countryOption += "<option value=\""+ allDistricts[index].name +"\">"+ allDistricts[index].name +"</option>\n";
        });
      }
    });
    document.getElementById("countryNameChoose").innerHTML = countryOption;
  }).catch(function(err) {});
}
