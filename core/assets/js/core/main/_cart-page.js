var productCartShowList = document.querySelector("#pageCart .product__cart-list");
var toast = document.getElementById("snackbar");
var cartNumber = document.querySelector("#cartNumber");
var sumProductshow = document.querySelector("#sumProductshow");
LayLocalStorage();
if(!productBuyArray || productBuyArray.length === 0 ){
  cartNumber.innerHTML = "";
}else if (productBuyArray || productBuyArray.length !== 0) {
  cartNumber.innerHTML = productBuyArray.length;
  cartNumber.classList.add('active');
}
if(window.location.pathname === "/gio-hang"){
  if(!productBuyArray || productBuyArray.length === 0 ){
    toastShow(toast,"Hiện tại giỏ đang trống <br/> Vui lòng chọn sản phẩm trước khi vào giỏ hàng","warning");
    setTimeout(function(){
        window.location.href = protocol + "//" + hostname;
     },2000);
  }
}
function deleteFunction(){
  var deteteBtn= document.querySelectorAll('.eraseProduct');
  deteteBtn.forEach(function(item){
    item.onclick = function(){
      var checkDelete = item.getAttribute("data-id");
      productBuyArray.splice(parseInt(checkDelete),1);
      LuuVaoLocalStorage(productBuyArray);
      doRenderCart();
      if(!productBuyArray || productBuyArray.length === 0 ){
        toastShow(toast,"Hiện tại giỏ đang trống <br/> Vui lòng chọn sản phẩm trước khi vào giỏ hàng","warning");
        setTimeout(function(){
          window.location.href = protocol + "//" + hostname;
        },2000);
      }
      if(!productBuyArray || productBuyArray.length === 0 ){
        cartNumber.innerHTML = "";
      }else if (productBuyArray || productBuyArray.length !== 0) {
        cartNumber.innerHTML = productBuyArray.length;
      }
    }
  });
}
$(document).ready(function(){
  var url = protocol + "//" + hostname + "/wp-content/themes/wolfactive-stealsneaker/core/assets/js/json/local.json";
  fetch(url , {
    method: 'GET'
  }).then(function(result) {
    return result.json();
  })
  .then(function(result) {
    var cityOption = '<option value="">Chọn tỉnh / thành phố </option>';
    result.forEach(function(element,i) {
      cityOption += "<option value=\""+ result[i].name +"\">"+ result[i].name +"</option>\n";
    });
    document.getElementById("cityNameChoose").innerHTML = cityOption;

  }).catch(function(err) {});
});
function cityChange(obj){
  var url = protocol + "//" + hostname + "/wp-content/themes/wolfactive-stealsneaker/core/assets/js/json/local.json";
  fetch(url , {
    method: 'GET'
  }).then(function(result) {
    return result.json();
  })
  .then(function(result) {
    var countryOption = '<option value="">Chọn quận / huyện </option>';
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
function doRenderCart(){
  if(productBuyArray.length !== 0){
    productCartShowList.innerHTML = "";
    var sumProductPrice =0;
    productBuyArray.forEach(function (item,i) {
    var giaGioSP = "";
    item.giaKhuyenMaiSanPham ? giaGioSP = item.giaKhuyenMaiSanPham : giaGioSP = item.giaSanPham;
    var giaGioSPNumber = parseInt(giaGioSP.split(".").join(''));
    productCartShowList.innerHTML += "\n      <div class=\"row-divide all_product_cart\">\n                <div class=\"col-divide-6\">\n                    <div class=\"row-divide\">\n                        <div class=\"col-divide-2\">\n                            <img src=\"" + item.hinhSanPham + "\" alt=\"" + item.tenSanPham + "\">\n                        </div>\n                        <div class=\"col-divide-10 name_product\">\n                            " + item.tenSanPham + " (" + item.sizeSanPham + ")\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <input class=\"number_product\" type=\"number\" min=\"1\" value=\"" + item.soLuongSanPham + "\" >\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <p>" + giaGioSP + "</p>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                   <button class=\"btn eraseProduct\" data-id=\"" + i + "\" onclick =\"deleteFunction()\"><i class=\"fas fa-trash-alt\"></i></button>\n                </div>\n            </div>\n      ";
    sumProductPrice += giaGioSPNumber*parseInt(item.soLuongSanPham);
});
    sumProductPriceArray = sumProductPrice.toString().split("").reverse();
    var countPriceSum = 0;
    sumProductPriceArray.forEach(function(item,i){
      if(countPriceSum === 2){
        item +="&nbsp;";
        countPriceSum = 0;
      }else{
        countPriceSum++;
      }
    });
    sumProductPrice = sumProductPriceArray.reverse().join('');
    sumProductshow.innerHTML = sumProductPrice;
  }else{
    productCartShowList.innerHTML = "Giỏ hàng hiện tại đang trống";
  }
}
productCartShowList ? doRenderCart() : {};
