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
    var checkPushProduct = true ;
    productBuyArrayPush.find(function(item){
      if( checkPushProduct === true && item.tenSanPham === productBuy.tenSanPham && item.sizeSanPham === productBuy.sizeSanPham ){
        item.soLuongSanPham += productBuy.soLuongSanPham;
        console.log("Mới:",productBuy.soLuongSanPham);
        console.log("Cũ:",item.soLuongSanPham);
        checkPushProduct =false;
      }else if (checkPushProduct === false) {}else if(checkPushProduct === true){
        pushToArray();
        checkPushProduct =false;
      }
    })
  }
  productBuyArrayPush.length === 0 ? pushToArray() : checkProduct();
    console.log(productBuyArrayPush);
    LuuVaoLocalStorage(productBuyArrayPush);
}
