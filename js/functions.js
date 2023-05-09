$(document).ready(function(){
  $('.slider-carousel').slick({
    draggable: true,
          autoplay: true, /* this is the new line */
          autoplaySpeed: 5000,
          slidesToShow: 1,
          slidesToScroll: 1,
          touchThreshold: 1000,
          fade: true,
          arrows: false,
          dots: false,
  });
});

function openNav() {
  document.getElementById("myNav").classList.add("w-100");
  document.getElementById("myNav").classList.remove("w-0")
}

function closeNav() {
  document.getElementById("myNav").classList.add("w-0");
  document.getElementById("myNav").classList.remove("w-100");
}

function phoneFormat(input) {//returns (###) ###-####
    input = input.replace(/\D/g,'');
    var size = input.length;
    if (size>0) {input="("+input}
    if (size>3) {input=input.slice(0,4)+") "+input.slice(4,11)}
    if (size>6) {input=input.slice(0,9)+"-" +input.slice(9)}
    return input;
}

function enableBtn(){
   let contactBtn = document.getElementById("contact-form-btn");
   contactBtn.disabled = false;
   contactBtn.classList.remove('disabled');
 }

 $(document).ready(function(){
  let desktop = document.getElementById('desktop');
  let mobile = document.getElementById('mobile');
  // Setup the images on landing page
  (window.innerWidth >= 1100) ? mobile.classList.add('display-none') : desktop.classList.add('display-none');
  
  $(window).resize(function() {
    if(window.innerWidth < 1100){
      mobile.classList.remove('display-none')
      desktop.classList.add('display-none');
    }else{
      mobile.classList.add('display-none')
      desktop.classList.remove('display-none');
    }
  });
  
 });