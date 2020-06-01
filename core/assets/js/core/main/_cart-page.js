var productCartShowList = document.querySelector("#pageCart .product__cart-list");
var toast = document.getElementById("snackbar");
var cartNumber = document.querySelector("#cartNumber");
var sumProductshow = document.querySelector("#sumProductshow");
var productTemplate ="";
var optionDistric = document.getElementById("cityNameChoose");
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
function cityChange(){
  var obj = optionDistric;
  var url = protocol + "//" + hostname + "/wp-content/themes/wolfactive-stealsneaker/core/assets/js/json/local.json";
  fetch(url , {
    method: 'GET'
  }).then(function(result) {
    return result.json();
  })
  .then(function(result) {
    var countryOption = '<option value="">Chọn quận / huyện </option>';
    result.forEach(function(element,i) {
      if(obj.value === element.name){
        var allDistricts = element.districts;
        allDistricts.forEach(function(e, index){
          countryOption += "<option value=\""+ e.name +"\">"+ e.name +"</option>\n";
        });
      }
    });
    document.getElementById("countryNameChoose").innerHTML = countryOption;
  }).catch(function(err) {
    console.log(err);
  });
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
    productTemplate +=
    "<table class=\"all_product_cart\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"display: inline-table;width: 100%;\">\n               <tr class=\"option_card table_line\" style=\"color: #a2a2a2;font-size: 15px;\">\n                   <th style=\"border-bottom: 1px solid #dedede;padding-bottom: 5px;\">Sản Phẩm</th>\n                   <th style=\"border-bottom: 1px solid #dedede;padding-bottom: 5px;\">Số Lượng</th>\n                   <th style=\"border-bottom: 1px solid #dedede;padding-bottom: 5px;\">Thành Tiền</th>\n                   <th style=\"border-bottom: 1px solid #dedede;padding-bottom: 5px;\">#</th>\n               </tr>\n               <tr class=\"table_line\">\n                   <td class=\"row-divide product_item\" style=\"display: flex;text-align: center;margin-top: 15px;border-bottom: 1px solid #dedede;padding-bottom: 5px;\">\n                       <div class=\"col-divide-2\">\n                           <img src=\"" + item.hinhSanPham + "\" alt=\"" + item.tenSanPham + "\">\n                       </div>\n                       <div class=\"col-divide-10 name_product\" style=\"align-self: center;padding-left: 10px;\">\n                           " + item.tenSanPham + " (" + item.sizeSanPham + " )\n                       </div></td>\n                   <td class=\"number_product product_item\" style=\"text-align: center;margin-top: 15px;border-bottom: 1px solid #dedede;padding-bottom: 5px;\">" + item.soLuongSanPham + "</td>\n                   <td class=\"col-divide-2 mc_self_center mc-center product_item\" style=\"text-align: center;margin-top: 15px;border-bottom: 1px solid #dedede;padding-bottom: 5px;\"><p>" + giaGioSP + "</p></td>\n                   <td class=\"col-divide-2 mc_self_center mc-center product_item\" style=\"text-align: center;margin-top: 15px;border-bottom: 1px solid #dedede;padding-bottom: 5px;\"><button class=\"btn eraseProduct\" data-id=\"0\" onclick=\"deleteFunction()\" style=\"color: #74c2b1;border: 1px solid transparent;padding: .375rem .75rem;background: none;\"><i class=\"fas fa-check\"></i></button></td>\n               </tr>\n     </table>";

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
optionDistric ? optionDistric.onchange = function (){
cityChange();
} :{};
