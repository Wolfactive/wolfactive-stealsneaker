function sanPham(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP) {
  this.tenSanPham = tenSP;
  this.giaSanPham = giaSP;
  this.giaKhuyenMaiSanPham = giaKMSP;
  this.sizeSanPham = sizeSP;
  this.soLuongSanPham = soLuongSP;
}
function LuuVaoLocalStorage(productBuyArray) {
    localStorage.clear();
    var jsonData = JSON.stringify(productBuyArray);
    localStorage.setItem("productBuyArray", jsonData);
}
function LayLocalStorage() {
    var jsonData = localStorage.getItem("productBuyArray");
    if (!jsonData) { localStorage = []; return;}
    productBuyArray = JSON.parse(jsonData);
}
function get_cart_item(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP){
  var productBuy = new sanPham(tenSP,giaSP,giaKMSP,sizeSP,soLuongSP);
  function pushToArray(){
    productBuyArrayPush.push(productBuy);
  }
  function checkProduct(){
    productBuyArrayPush.find(function(item){
      item.sanPham.tenSanPham === productBuy.sanPham.tenSanPham && item.sanPham.sizeSanPham === productBuy.sanPham.sizeSanPham ? item.sanPham.soLuongSanPham + productBuy.sanPham.soLuongSanPham : pushToArray();
    })
    console.log(productBuyArrayPush);
  }
  productBuyArrayPush.length === 0 ? pushToArray() : checkProduct();
    LuuVaoLocalStorage(productBuyArrayPush);
}
