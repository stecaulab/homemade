// FUNCTION OPEN/CLOSE MENUFULL SCREEN BAR

function openNav(){

    document.getElementById("myNav").style.height = "100vh";
    document.getElementById("myBody").style.overflow = "hidden";

}

function closeNav(){

    document.getElementById("myNav").style.height = "0%";
    document.getElementById("myBody").style.overflow = "visible";
}

// CLOSE THE MENUFULL BAR

function openSubnav(){

    document.getElementById("subNav").style.right = "0vw";
}

function closeSubnav(){


    document.getElementById("subNav").style.right = "-83vw";

}

// FUNCTION OPEN/CLOSE SEARCH BAR


function openSearch(){

    document.getElementById("mySearch").style.height = "100vh";
    document.getElementById("myBody").style.overflow = "hidden";

}
function closeSearch(){

    document.getElementById("mySearch").style.height = "0%";
    document.getElementById("myBody").style.overflow = "visible";

}

// FUNCTION FOR NAVBAR SCROLL BACKGROUND GRAY

    var mh_scroll_position = 0;

    $(document).scroll(function(){
        mh_scroll_position = $(this).scrollTop();

        if (mh_scroll_position > 250) {
            $('#nav').addClass('is_scrolled');
        } else {
            $('#nav').removeClass('is_scrolled');
        }

    });

// function presScroll(){
//     event.preventDefault();
//     window.scroll({
//         top: 720,
//         left: 0,
//         behavior: 'smooth'
//       });
//     }

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
