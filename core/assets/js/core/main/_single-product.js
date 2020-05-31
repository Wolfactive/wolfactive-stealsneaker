var inputCT = document.getElementById('qualityCT');
var minusCT = document.getElementById('minusCT');
var plusCT = document.getElementById('plusCT');
var productSizeFilterValueBuy;
var productSizeFilter = document.querySelectorAll('input[name="productSize"]');
var productSizeFilterLabel = document.querySelectorAll('.productSize');
var btnCart = document.querySelector('#btnToCart');
var btnBuy = document.querySelector('#btnBuy');
var toast = document.getElementById("snackbar");
minusCT ? minusCT.onclick = function (){if(inputCT.value > 1){inputCT.value--;}} :{};
plusCT ? plusCT.onclick = function (){inputCT.value++;}: {};
function productToCart(){
  get_cart_item(pictureArray[0].product_picture,result[0].title,result[0].price,result[0].sale_price,productSizeFilterValueBuy,parseInt(input.value));
  toastShow(toast,"Đặt hàng thành công","succeed");
}
function productToBuy(){
  get_cart_item(pictureArray[0].product_picture,result[0].title,result[0].price,result[0].sale_price,productSizeFilterValueBuy,parseInt(input.value));
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
