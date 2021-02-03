
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
	

	$("#mobile_menu_toggle").click(function(){
		$("#top-menu").slideToggle();
	});

	$(".mobile_sub_menu_toggle").click(function(){
		$(this).parent().find('ul').slideToggle();
	});
	

	
});


// Cache selectors
var topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+50,
    // All list items
    menuItems = $("a.scroll_link"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });


menuItems.click(function(e){
	
	if ($(window).width() < 767) {
		$("#top-menu").slideUp();
	}
	
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+50;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 900);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   // Set/remove active class
   menuItems.parent().removeClass("active")
     .end().filter("[href='#"+id+"']").parent().addClass("active");
});