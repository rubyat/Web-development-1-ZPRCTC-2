
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("my_header");
var sticky = navbar.offsetTop + 100;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}



$(document).ready(function(){
	


	
});