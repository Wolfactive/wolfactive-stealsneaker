function sanPham(hinhSP,tenSP,giaSP,giaKMSP,sizeSP,soLuongSP) {
  this.hinhSanPham = hinhSP;
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
LayLocalStorage();
function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }
productBuyArrayPush = [].concat(_toConsumableArray(productBuyArrayPush), _toConsumableArray(productBuyArray));
function get_cart_item(hinhSP,tenSP,giaSP,giaKMSP,sizeSP,soLuongSP){
  var productBuy = new sanPham(hinhSP,tenSP,giaSP,giaKMSP,sizeSP,soLuongSP);
  function pushToArray(){
    productBuyArrayPush.push(productBuy);
  }
  function checkProduct(){
    var checkPushProduct = true ;
    productBuyArrayPush.find(function(item){
      if( checkPushProduct === true && item.tenSanPham === productBuy.tenSanPham && item.sizeSanPham === productBuy.sizeSanPham ){
        item.soLuongSanPham += productBuy.soLuongSanPham;
        checkPushProduct =false;
      }else if (checkPushProduct === false) {}else if(checkPushProduct === true){
        pushToArray();
        checkPushProduct =false;
      }
    })
  }
  productBuyArrayPush.length === 0 ? pushToArray() : checkProduct();
  if(!productBuyArray || productBuyArray.length === 0 ){
    cartNumber.innerHTML = "";
  }else if (productBuyArray || productBuyArray.length !== 0) {
    cartNumber.innerHTML = productBuyArray.length;
    cartNumber.classList.add('active');
  }
    LuuVaoLocalStorage(productBuyArrayPush);
}
