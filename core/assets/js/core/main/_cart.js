function sanPham(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP) {
  this.tenSanPham = tenSP;
  this.giaSanPham = giaSP;
  this.giaKhuyenMaiSanPham = giaKMSP;
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
function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }
function get_cart_item(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP){
  var productBuy = new sanPham(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP);
  var productBuyArray = [];
  function pushToArray(){
    productBuyArray.push(productBuy);
    productBuyArrayPush = [].concat(_toConsumableArray(productBuyArrayPush), _toConsumableArray(productBuyArray));
  }
  productBuyArrayPush.length !== 0 ? productBuyArrayPush.forEach(function(item, i){
    productBuy.tenSP === item.tenSanPham ? item.soLuongSanPham + productBuy.soLuongSP : pushToArray();
  }) :   pushToArray();
  LuuVaoLocalStorage(productBuyArrayPush);
}
