$(window).scroll(function() {
    if($(window).scrollTop()){
        $("nav").addClass("black");
    }
    else {
        $("nav").removeClass("black");
    }
});

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

function thisAlert() {
  alert("Your message was successfully sent! thanks for participating with us.")
}

function thatAlert() {
  var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                  document.write ("");
                  return true;
               } else {
                  document.write ("");
                  return false;
               }
}

