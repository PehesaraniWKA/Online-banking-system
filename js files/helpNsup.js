window.onscroll = function() {myFunction()};

var navbar = document.getElementsByClassName("helpNsup-nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function enableButton(){
  if(document.getElementById("checkbox").checked)
  {
      document.getElementById("submitBtn").disabled=false;
  }
  else{
      document.getElementById("submitBtn").disabled=true;
  }

}