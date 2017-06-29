/*
 * This is the image rotation for the image slide show on the start page
 * 
 */
var index = 0;
carousel();
function carousel() {
    var i = 0;    
    var images = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < images.length; i++) {
        images[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    index++;
    if (index > images.length) {
        index = 1;
    }
    images[index-1].style.display = "block";
    dots[index-1].className += " active";
    setTimeout(carousel, 5000);
}

function plusSlides(n) {
    showSlides(index += n);
}

function chooseSlide(n) {
    showSlides(index = n);
}

function showSlides(n) {
    var i = 0;
    var dots = document.getElementsByClassName("dot");
    var images = document.getElementsByClassName("slide");
    for (i = 0; i < images.length; i++) {
        images[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if(n > images.length) {
        index = 1;
    }
    if(n < 1) {
        index = images.length;
    }
    images[index-1].style.display = "block";
    dots[index-1].className += " active";
}