/**
 * Created by sqadan on 6/11/15.
 */

//Smooth scroll on Click
function scrollNav() {
    $('.nav a').click(function(){
        //Toggle Class
        $(".active").removeClass("active");
        $(this).closest('li').addClass("active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('active');
        //Animate
        $('html, body, a').stop().animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 50
        }, 400);
        return false;
    });
    $('.scrollTop a').scrollTop();
}
scrollNav();

// parallax
/*
var ypos,image;
function parallax (){
    ypos = window.pageYOffset();
    image = document.getElementsByClassName("imageParallax");
    image.style.top = ypos * (-0.9) + "px";
}
window.addEventListener("scroll", parallax);
*/

//background video
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

function vidFade() {
    vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
    // only functional if "loop" is removed
    vid.pause();
    // to capture IE10
    vidFade();
});

pauseButton.addEventListener("click", function() {
    vid.classList.toggle("stopfade");
    if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = "Pause";
    } else {
        vid.pause();
        pauseButton.innerHTML = "Paused";
    }
})