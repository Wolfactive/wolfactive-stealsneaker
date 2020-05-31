var productCartShowList = document.querySelector("#pageCart .product__cart-list");
var toast = document.getElementById("snackbar");
LayLocalStorage();
if(!productBuyArray || productBuyArray.length === 0 ){
  setTimeout(function(){
      toastShow(toast,"Hiện tại giỏ đang trống <br/> Vui lòng chọn sản phẩm trước khi vào giỏ hàng","warning");
   },function(){window.location.href = protocol + "//" + hostname;}, 3000);
}
function deleteFunction(){
  var deteteBtn= document.querySelectorAll('.eraseProduct');
  deteteBtn.forEach(function(item){
    item.onclick = function(){
      var checkDelete = item.getAttribute("data-id");
      productBuyArray.splice(parseInt(checkDelete),1);
      LuuVaoLocalStorage(productBuyArray);
      doRenderCart();
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
    console.log(result);
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
  if(productBuyArray){
    productCartShowList.innerHTML = "";
    productBuyArray.forEach(function (item,i) {
    var giaGioSP = "";
    item.giaKhuyenMaiSanPham ? giaGioSP = item.giaKhuyenMaiSanPham : giaGioSP = item.giaSanPham;
    productCartShowList.innerHTML += "\n      <div class=\"row-divide all_product_cart\">\n                <div class=\"col-divide-6\">\n                    <div class=\"row-divide\">\n                        <div class=\"col-divide-2\">\n                            <img src=\"" + item.hinhSanPham + "\" alt=\"" + item.tenSanPham + "\">\n                        </div>\n                        <div class=\"col-divide-10 name_product\">\n                            " + item.tenSanPham + " (" + item.sizeSanPham + ")\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <input class=\"number_product\" type=\"number\" min=\"1\" value=\"" + item.soLuongSanPham + "\" >\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <p>" + giaGioSP + "</p>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                   <button class=\"btn eraseProduct\" data-id=\"" + i + "\" onclick =\"deleteFunction()\"><i class=\"fas fa-trash-alt\"></i></button>\n                </div>\n            </div>\n      ";
});
  }else{
    toastShow(toast,"Giỏ hàng hiện tại đang trống","warning");
    productCartShowList.innerHTML = "Giỏ hàng hiện tại đang trống";
  }
}
productCartShowList ? doRenderCart() : {};
