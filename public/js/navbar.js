 // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
 window.onscroll = function() {scrollFunction()};

 function scrollFunction() {
   if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
     document.getElementById("navbar").style.position = "fixed";
   } else {
     document.getElementById("navbar").style.position = "sticky";
     document.getElementById("navbar").style.width = "100%";
   }
 }