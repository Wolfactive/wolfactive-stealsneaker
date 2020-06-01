var hoVaTenCart = document.querySelector('input[name="hoVaTenCart"]');
var hoVaTenCartVal = document.querySelector('#hoVaTenCartVal');
var dienThoaiCart = document.querySelector('input[name="dienThoaiCart"]');
var dienThoaiCartVal = document.querySelector('#dienThoaiCartVal');
var emailCart = document.querySelector('input[name="emailCart"]');
var emailCartVal = document.querySelector('#emailCartVal');
var diaChiCart = document.querySelector('input[name="diaChiCart"]');
var diaChiCartVal = document.querySelector('#diaChiCartVal');
var ghiChuCart = document.querySelector('input[name="ghiChuCart"]');
var cityNameChoose = document.querySelector('#cityNameChoose');
var cityNameChooseVal = document.querySelector('#cityCartVal');
var countryNameChoose = document.querySelector('#countryNameChoose');
var countryNameChooseVal = document.querySelector('#districCartVal');
var thanhToanCart = document.querySelector('input[name="thanhToanCart"]');
var submitTTCart = document.querySelector('#submitTTCart');
// var urlAjax = protocol + "//" + hostname + "/wp-admin/admin-ajax.php";
var isNameCart = false;
var isPhoneCart = false;
var isEmailCart = false;
var isAddressCart = false;
var isCityCart = false;
var isDistricCart = false;
hoVaTenCart ? hoVaTenCart.onkeyup = function(){
  hoVaTenCartVal.classList.add('d--none');
}:{};

dienThoaiCart ? dienThoaiCart.onkeyup = function(){
  dienThoaiCartVal.classList.add('d--none');
}:{};

emailCart ? emailCart.onkeyup = function(){
  emailCartVal.classList.add('d--none');
}:{};

diaChiCart ? diaChiCart.onkeyup = function(){
  diaChiCartVal.classList.add('d--none');
}:{};

cityNameChoose ? cityNameChoose.onchange = function(){
  cityNameChooseVal.classList.add('d--none');
}:{};

countryNameChoose ? countryNameChoose.onchange = function(){
  countryNameChooseVal.classList.add('d--none');
}:{};

function checkNameCart(){
  var patternNameCart = new RegExp(
    "^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ" +
    "ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ" +
    "ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$"
  );
  if (!patternNameCart.test(hoVaTenCart.value)) {
      hoVaTenCartVal.classList.remove('d--none');
      isNameCart = false;
  }else{
    isNameCart = true;
  }
}

function checkNameCartEmpty() {
  hoVaTenCartVal.classList.remove('d--none');
  isNameCart = false;
}

function checkPhoneCart(){
  var patternPhoneCart = new RegExp(
      "((09|03|07|08|05)+([0-9]{8})\b)"
  );
  if (!patternPhoneCart.test(dienThoaiCart.value)) {
      dienThoaiCartVal.classList.remove('d--none');
      isPhoneCart = false;
  }else{
    isPhoneCart = true;
  }
}

function checkPhoneCartEmpty(){
  dienThoaiCartVal.classList.remove('d--none');
  isPhoneCart = false;
}

function checkEmailCart(){
  var patternEmailCart = new RegExp(
      "^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@" +
      "[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$"
  );
  if (!patternEmailCart.test(emailCart.value)) {
      emailCartVal.classList.remove('d--none');
      isEmailCart = false;
  }else{
    isEmailCart = true;
  }
}

function checkEmailCartEmpty(){
  emailCartVal.classList.remove('d--none');
  isEmailCart = false;
}

function checkAddressCartEmpty(){
  diaChiCartVal.classList.remove('d--none');
  isAddressCart = false;
}

function checkValidateCart(){
  hoVaTenCart.value ? checkNameCart() : checkNameCartEmpty();
  dienThoaiCart.value ? isPhoneCart = true : checkPhoneCartEmpty();
  emailCart.value ? checkEmailCart() : checkEmailCartEmpty();
  diaChiCart.value ? isAddressCart = true : checkAddressCartEmpty();
  cityNameChoose.value ? isCityCart = true : cityNameChooseVal.classList.remove('d--none');
  countryNameChoose.value ? isDistricCart = true : countryNameChooseVal.classList.remove('d--none');
  isNameCart === true && isPhoneCart === true && isEmailCart === true && isAddressCart === true && isCityCart === true && isDistricCart === true ? isValidateCart = true : isValidateCart =
  false;
}
function sendEmail(){
    $.ajax({
        type: 'POST',
        url: urlAjax,
        data: {
          'action': 'Action_Sendmail',
          'email' : "huyminhnguyenpham@gmail.com",
        },
        success: function (data) {
          console.log(data);
          console.log('Gửi thành công');
        },
    });
}
function doTransaction(){
  // sendEmail();
  // toastShow(toast,"Hiện tại hệ thống giỏ hàng đang bảo trì <br/> Vui lòng liên hệ mua hàng qua messenger<br/> Chúng tôi sẽ khác phục tình trạng này sớm nhất có thể(*)","warning");
  // setTimeout(function(){  window.location.href = "https://m.me/StealSneakerAuthentic" }, 500);
  // jQuery.ajax({
  //   type: "GET",
  //   url: "https://script.google.com/macros/s/AKfycbzdWaW-yuCvm-DoMLUyYZRPnbmqtahENzoTKquuLnZCpptIKpK9/exec",
  //   dataType: "json",
  //   header: "Access-Control-Allow-Origin: *",
  //   crossDomain: !0,
  //   data: {
  //     user: n,
  //     email: e,
  //     phone: c,
  //     message: o,
  //     service: a,
  //     platform: t,
  //     giaodien: s,
  //     chucnang: i,
  //     productdesign: h
  //   },
  //   success: function success(n) {
  //     "false" == n ? alert("Thêm không thành công, bạn cũng có thể sử dụng để hiển thị Popup hoặc điều hướng") : alert("Đã thêm dữ liệu vào Form");
  //   }
  // });
  Email.send({
    SecureToken : "512e69f-5ee4-4cbc-9c40-e1d0c7ff1f56 ",
    To : 'cskh.stealsneaker.com@gmail.com',
    From : emailCart.value,
    Subject : "[Đặt Hàng]-" + hoVaTenCart.value + "-" +dienThoaiCart.value ,
    Body : " Tên: " + hoVaTenCart.value + " <br/>\n    Số điện thoại: " + dienThoaiCart.value + "<br/>\n    Email: " + emailCart.value + "\n    Nội dung đặt hàng"
}).then( function(message){
  alert(message)
}
);
  productBuyArray = [];
  LuuVaoLocalStorage(productBuyArray);
}

submitTTCart ? submitTTCart.onclick = function(){
  checkValidateCart();
  isValidateCart === true ? doTransaction() : {};
}:{};
