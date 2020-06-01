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
var submitTTCart = document.querySelector('#submitTTCart');
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
function sendEmailSteal(toEmail,fromEmail,order){
  if(order === 1){
    Email.send({
      SecureToken : "00997793-1227-4882-aa34-1f3f200d302d",
      To : toEmail,
      From : fromEmail,
      Subject : "Xác nhận đơn đặt hàng của " + hoVaTenCart.value,
      Body : "<script src=\"https://kit.fontawesome.com/a076d05399.js\"></script><p style=\"font-size:30px; font-weight:600\">Xin chào "+ hoVaTenCart.value +"!!<p><p>Chúng tôi gửi mail này để xác nhận đơn hàng của bạn gồm:</p>" + productTemplate
  }).then( function(){
       toastShow(toast,"Đặt hàng thành công <br/> Chúng tôi sẽ liên hệ sớm nhất có thể","succeed");
  });
}else{
  Email.send({
    SecureToken : "00997793-1227-4882-aa34-1f3f200d302d",
    To : toEmail,
    From : fromEmail,
    Subject : "[Đặt hàng]" + " - " + hoVaTenCart.value + " - " +dienThoaiCart.value,
    Body : "<table>" +productTemplate +"</table>"
}).then();}
}
function doTransaction(){
  sendEmailSteal(emailCart.value,"cskh.stealsneaker.com@gmail.com",1);
  sendEmailSteal("doublelift.xd@gmail.com",emailCart.value,2);
  productBuyArray = [];
  LuuVaoLocalStorage(productBuyArray);
  setTimeout(function(){  window.location.href = protocol + "//" + hostname + "/thanh-toan" }, 3000);
}

submitTTCart ? submitTTCart.onclick = function(){
  checkValidateCart();
  isValidateCart === true ? doTransaction() : {};
}:{};
