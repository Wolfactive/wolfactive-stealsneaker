var viewQuickArray = document.querySelectorAll('button[name="viewQuick"]');
var viewQuickCloseArray = document.querySelectorAll('.modal--content .close')
var viewQuickModal = document.querySelector('#viewQuickModal');
viewQuickArray ?
viewQuickArray.forEach(function(item, i){
    item.onclick= function(){
      viewQuickModal.style.display="block";      
    }
}):{};
viewQuickCloseArray ?
viewQuickCloseArray.forEach(function(item, i){
  item.onclick= function(){
    viewQuickModal.style.display="none";
  }
}):{};
viewQuickModal ?
window.onclick = function(event) {
    if (event.target == viewQuickModal) {
        viewQuickModal.style.display = "none";
    }
} :{};
