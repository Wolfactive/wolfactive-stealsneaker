var productCartShowList = document.querySelector("#pageCart .product__cart-list");
var toast = document.getElementById("snackbar");
LayLocalStorage();
function doRenderCart(){
  if(productBuyArray){
    productCartShowList.innerHTML = "";
    productBuyArray.forEach(function (item) {
    var giaGioSP = "";
    item.giaKhuyenMaiSanPham ? giaGioSP = item.giaKhuyenMaiSanPham : giaGioSP = item.giaSanPham;
    productCartShowList.innerHTML += "\n      <div class=\"row-divide all_product_cart\">\n                <div class=\"col-divide-6\">\n                    <div class=\"row-divide\">\n                        <div class=\"col-divide-2\">\n                            <img src=\"" + item.hinhSanPham + "\" alt=\"" + item.tenSanPham + "\">\n                        </div>\n                        <div class=\"col-divide-10 name_product\">\n                            " + item.tenSanPham + " (" + item.sizeSanPham + ")\n                        </div>\n                    </div>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <input class=\"number_product\" type=\"number\" min=\"1\" value=\"" + item.soLuongSanPham + "\" >\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                    <p>" + giaGioSP + "</p>\n                </div>\n                <div class=\"col-divide-2 mc_self_center mc-center\">\n                   <a href=\"\"><i class=\"fas fa-trash-alt\"></i></a>\n                </div>\n            </div>\n      ";
});
  }else{
    toastShow(toast,"Giỏ hàng hiện tại đang trống","warning");
    productCartShowList.innerHTML = "Giỏ hàng hiện tại đang trống";
  }
}
productCartShowList ? doRenderCart() : {};
