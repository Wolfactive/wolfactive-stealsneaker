var viewQuickArray = document.querySelectorAll('button[name="viewQuick"]');
var viewQuickCloseArray = document.querySelectorAll('.modal--content .close')
var viewQuickModal = document.querySelector('#viewQuickModal');
var viewQuickContent = document.querySelector('#modal__item');
viewQuickArray ?
viewQuickArray.forEach(function(item, i){
    item.onclick= function(){
      var titleCheck = item.getAttribute("data-view");
      fetch( protocol + "//" + hostname + '/wp-json/product-api/v1/search?term=' + titleCheck)
      .then(function(result){
        return result.json();
      })
      .then(function(result){
        var priceCheck = '';
        result[0].sale_price ? priceCheck = 'line--through' :{};
        var sizeArray = result[0].size;
      var sizeShow = "";
      sizeArray.forEach(function (item, i) {
        sizeShow += "<div class=\"filter__form-item\">\n              <input type=\"radio\" id=\"productSize" + i + "\" name=\"productSize\" value=\"" + item + "\">\n              <label class=\"productSize\" for=\"productSize" + i + "\">" + item + "</label>\n            </div>";
      });
      pictureArray = result[0].pictures;
      var priceSale;
      result[0].sale_price ? priceSale= result[0].sale_price +"VND": priceSale="";
      var pictureShow = "";
      pictureArray.forEach(function (item, i) {
        pictureShow += "\n            <div class=\"pictures__item\">\n              <img src=\"" + item.product_picture + "\" alt=\"" + item.product_picture_alt + "\" class=\"d--block\" />\n            </div>\n          ";
      });
      viewQuickContent.innerHTML = "\n       <div class=\"row-divide\">\n         <div class=\"col-divide-6 col-divide-md-12\">\n          <div class=\"picture__list\">\n            " + pictureShow + "\n          </div>\n         </div>\n         <div class=\"col-divide-6 col-divide-md-12\">\n           <div class=\"modal__contain\">\n           <h4 class=\"title--item\">\n             " + result[0].title + "\n           </h4>\n           <p class=\"price " + priceCheck + "\">\n            " + result[0].price + " VNĐ\n           </p>\n           <p class=\"price_sale\">\n            " + priceSale + "\n           </p>\n           <div class=\"size\">\n            <p class=\"title--item\">\n              Chọn size giày:\n            </p>\n            <div class=\"size__list\">\n              " + sizeShow + "\n            </div>\n           </div>\n           <div class=\"quality\">\n            <div>\n              <button class=\"btn\" id=\"minus\">-</button>\n            </div>\n            <div>\n              <input class=\"input\" id=\"quality\" type=\"number\" value=\"1\">\n            </div>\n            <div>\n              <button class=\"btn\" id=\"plus\">+</button>\n            </div>\n           </div>\n           <div class=\"submit text--right\">\n              <button class=\"btn text--upcase\">\n                <i class=\"fas fa-shopping-bag\"></i> mua ngay\n              </button>\n           </div>\n           </div>\n         </div>\n       </div>";
      })
      .then(function(){
        viewQuickModal.style.display="block";
        $('.picture__list').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
        });
      })
      .then(function(){
        var input = document.getElementById('quality');
        var minus = document.getElementById('minus');
        var plus = document.getElementById('plus');
        var productSizeFilterValueModal;
        var productSizeFilter = document.querySelectorAll('input[name="productSize"]');
        var productSizeFilterLabel = document.querySelectorAll('.productSize');
        productSizeFilter ? actionFilter(productSizeFilter,productSizeFilterLabel):{};
        productSizeFilter.forEach(function(item){
          if(item.checked){
            productSizeFilterValueModal = item.value;
          }
        });
        minus.onclick = function (){
         if(input.value > 1){
           input.value--;
         }
        };
        plus.onclick = function (){
           input.value++;
        };
        function productToCart(){
          console.log('pass');
        }
        productSizeFilterValueModal ? productToCart() : toastShow();
      })
      .catch(function(err){
        console.log(err);
      })
    }
}):{};
viewQuickCloseArray ?
viewQuickCloseArray.forEach(function(item, i){
  item.onclick= function(){
    viewQuickModal.style.display="none";
  }
}):{};
viewQuickModal ?
window.onclick = function(event) {
    if (event.target == viewQuickModal) {
        viewQuickModal.style.display = "none";
    }
} :{};
