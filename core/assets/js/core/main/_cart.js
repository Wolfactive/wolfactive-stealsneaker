function sanPham(tenSP,giaSP,sizeSP,soLuongSP) {
  this.tenSanPham = tenSP;
  this.giaSanPham = giaSP;
  this.sizeSanPham = sizeSP;
  this.soLuongSanPham = soLuongSP;
}
function LuuVaoLocalStorage(productBuyArray) {
    var jsonData = JSON.stringify(productBuyArray);
    localStorage.setItem("productBuyArray", jsonData);
}
function LayLocalStorage() {
    var jsonData = localStorage.getItem("productBuyArray");
    if (!jsonData) { localStorage = []; return;}
    productBuyArray = JSON.parse(jsonData);
}
function get_cart_item(tenSP,giaSP,sizeSP,soLuongSP){
  var productBuy = new sanPham(tenSP,giaSP,sizeSP,soLuongSP);
  var productBuyArray = [];
  productBuyArray.length !== 0 ? productBuyArray.forEach(function(item, i){
    productBuy.tenSP === item.tenSP ? item.soLuongSP + productBuy.soLuongSP : productBuyArray.push(productBuy);
  }) :   productBuyArray.push(productBuy);
  LuuVaoLocalStorage(productBuyArray);
}
