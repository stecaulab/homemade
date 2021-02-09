function openNav(){

    document.getElementById("myNav").style.height = "100vh";
    document.getElementById("myBody").style.overflow = "hidden";

}

function closeNav(){

    document.getElementById("myNav").style.height = "0%";
    document.getElementById("myBody").style.overflow = "visible";
}

function openSubnav(){

    document.getElementById("subNav").style.right = "0vw";
}

function closeSubnav(){


    document.getElementById("subNav").style.right = "-83vw";

}

function openSearch(){

    document.getElementById("mySearch").style.height = "100vh";
    document.getElementById("myBody").style.overflow = "hidden";

}
function closeSearch(){

    document.getElementById("mySearch").style.height = "0%";
    document.getElementById("myBody").style.overflow = "visible";

}



    var mh_scroll_position = 0;

    $(document).scroll(function(){
        mh_scroll_position = $(this).scrollTop();

        if (mh_scroll_position > 150) {
            $('nav').addClass('is_scrolled');
        } else {
            $('nav').removeClass('is_scrolled');
        }

    });


