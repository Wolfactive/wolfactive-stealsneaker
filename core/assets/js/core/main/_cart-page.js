var productCartShowList = document.querySelector("#pageCart .product__cart-list");
var toast = document.getElementById("snackbar");
var deteteBtn= document.querySelectorAll('.eraseProduct');
LayLocalStorage();
function deleteFunction(){
  deteteBtn.forEach(function(item){
    item.onclick = function(){
      var checkDelete = deteteBtn.getAttribute("data-id");
      productBuyArray.splice(parseInt(checkDelete),1);
      doRenderCart();
    }
  });
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
