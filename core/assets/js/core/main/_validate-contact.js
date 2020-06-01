var hoVaTen = document.querySelector('#hoVaTen');
var email = document.querySelector('#Email');
var dienThoai = document.querySelector('#dienThoai');
var diaChi = document.querySelector('#diaChi');
var hoVaTenVal = document.querySelector('#hoVaTenVal');
var emailVal = document.querySelector('#emailVal');
var dienThoaiVal = document.querySelector('#dienThoaiVal');
var diaChiVal = document.querySelector('#diaChiVal');
var btnFormcontact = document.querySelector('#btnFormcontact');
var btnWriterAgain = document.querySelector('#btnWriterAgain');
var noiDung = document.querySelector('#noiDung');
var noiDungVal = document.querySelector('#noiDungVal');
var isName = false;
var isEmail = false;
var isPhone = false;
var isAddress = false;
var isComment = false;
var isValiate = false;
hoVaTen ? hoVaTen.onkeyup= function(){
  hoVaTenVal.classList.add('d---none');
}:{};
email ? email.onkeyup= function(){
  emailVal.classList.add('d---none');
}:{};
dienThoai ? dienThoai.onkeyup= function(){
  dienThoaiVal.classList.add('d---none');
}:{};
diaChi ? diaChi.onkeyup= function(){
  diaChiVal.classList.add('d---none');
}:{};
function checkNameEmtpy(){
  hoVaTenVal.classList.remove('d--none');
  isName = false;
}
function checkRealName(){
  var patternName = new RegExp(
    "^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶ" +
    "ẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợ" +
    "ụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\\s]+$"
  );
  if (!patternName.test(hoVaTen.value)) {
      hoVaTenVal.classList.remove('d--none');
      isName = false;
  }else{
    isName = true;
  }
}
function checkRealEmail(){
  var patternEmail = new RegExp(
      "^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@" +
      "[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$"
  );
  if (!patternEmail.test(email.value)) {
      emailVal.classList.remove('d--none');
      isEmail = false;
  }else{
    isEmail = true;
  }
};
function checkEmailEmpty(){
  emailVal.classList.remove('d--none');
  isEmail = false;
};
function checkRealPhone(){
  var patternPhone = new RegExp(
      "((09|03|07|08|05)+([0-9]{8})\b)"
  );
  if (!patternPhone.test(dienThoai.value)) {
      dienThoaiVal.classList.remove('d--none');
      isPhone = false;
  }else{
    isPhone = true;
  }
};
function checkPhoneEmpty(){
  dienThoaiVal.classList.remove('d--none');
  isPhone = false;
};
function checkAddressEmpty(){
  diaChiVal.classList.remove('d--none');
  isAddress = false;
};
function checkComment(){
  var patternComment = new RegExp(
      "((09|03|07|08|05)+([0-9]{8})\b)"
  );
  if (!patternComment.test(noiDung.value)) {
      noiDungVal.classList.remove('d--none');
      isComment = false;
  }
  else{
    isComment = true;
  }
}
function checkVaidate(){
  hoVaTen.value ? checkRealName() : checkNameEmtpy();
  email.value ? checkRealEmail() : checkEmailEmpty();
  dienThoai.value ? checkRealPhone() : checkPhoneEmpty();
  diaChi.value ? isAddress = true : checkAddressEmpty();
  noiDung.value ? checkComment() : isComment = true;
  isName === true && isEmail === true && isPhone === true && isAddress === true && isComment === true ? isValidate = true : isValiate = false;
};
function doContact(){
  Email.send({
    SecureToken : "00997793-1227-4882-aa34-1f3f200d302d",
    To : "doublelift.xd@gmail.com",
    From : email.value,
    Subject : "[Liên hệ]" + " - " + hoVaTen.value + " - " +dienThoai.value,
    Body : "<p>Đia chỉ:"+diaChi.value+"</p><p>"+noiDung.value+"</p>"
}).then(function(){
  toastShow(toast,"Gửi mail thành công <br/> Chúng tôi sẽ liên hệ sớm nhất có thể","succeed");
  setTimeout(function(){  window.location.href = protocol + "//" + hostname }, 3000);
});
}
btnFormcontact ? btnFormcontact.onclick= function(){
  checkVaidate();
  isValiate === true ? doContact() : console.log(false)
}:{};

btnWriterAgain ? btnWriterAgain.onclick = function(){
  hoVaTen.value ="";
  email.value = "";
  dienThoai.value ="";
  diaChi.value = "";
}:{};
