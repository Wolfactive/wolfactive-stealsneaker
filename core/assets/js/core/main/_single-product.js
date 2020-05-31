var inputCT = document.getElementById('qualityCT');
var minusCT = document.getElementById('minusCT');
var plusCT = document.getElementById('plusCT');
var productSizeFilterValueBuy;
var productSizeFilter = document.querySelectorAll('input[name="productSize"]');
var productSizeFilterLabel = document.querySelectorAll('.productSize');
var btnCart = document.querySelector('#btnToCart');
var btnBuy = document.querySelector('#btnBuy');
var toast = document.getElementById("snackbar");
var nameProductSingle = document.querySelector('#singleProduct .sg_product_title');
nameProductSingle ? nameProductSingle=nameProductSingle.innerText :{};
var pictureProductSingle = document.querySelector(".slider_product_small .slick-track .image_product:nth-child(1) img");
pictureProductSingle ? pictureProductSingle = pictureProductSingle.getAttribute('src') :{};
var priceProductSingle = document.querySelector("#singleProduct .price_product");
priceProductSingle ? priceProductSingle = priceProductSingle.innerText.split(" ")[0] :{};
var priceProductSingleSale = document.querySelector("#singleProduct .product_price_sale");
priceProductSingleSale ? priceProductSingleSale = priceProductSingleSale.innerText.split(" ")[0] :{};
var priceReturn;
if(priceProductSingle) {
  priceProductSingleSale ? priceReturn = priceProductSingleSale : priceReturn = priceProductSingle;
  minusCT ? minusCT.onclick = function (){if(inputCT.value > 1){inputCT.value--;}} :{};
  plusCT ? plusCT.onclick = function (){inputCT.value++;}: {};
}
function productToCart(){
  get_cart_item(pictureProductSingle,nameProductSingle,priceProductSingle,priceReturn,productSizeFilterValueBuy,parseInt(inputCT.value));
  toastShow(toast,"Đặt hàng thành công","succeed");
}
function productToBuy(){
  get_cart_item(pictureProductSingle,nameProductSingle,priceProductSingle,priceReturn,productSizeFilterValueBuy,parseInt(inputCT.value));
  toastShow(toast,"Đặt hàng thành công. <br/>Trang web đang chuyển hướng qua giỏ hàng","succeed");
  setTimeout(function(){  window.location.href = protocol + "//" + hostname + "/gio-hang";}, 1500);
}
btnCart  ? btnCart .onclick = function(){
  productSizeFilter.forEach(function(item){item.checked ?  productSizeFilterValueBuy = item.value :{};});
  productSizeFilterValueBuy ? productToCart() : toastShow(toast,"Vui lòng chọn size trước khi đặt hàng (*)","warning");
}:{};
btnBuy ? btnBuy.onclick = function(){
  productSizeFilter.forEach(function(item){item.checked ?  productSizeFilterValueBuy = item.value :{};});
  productSizeFilterValueBuy ? productToBuy() : toastShow(toast,"Vui lòng chọn size trước khi đặt hàng (*)","warning");
}:{};
