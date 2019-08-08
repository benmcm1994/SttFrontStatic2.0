// Adds and removes transparency class if at top or not.
window.onscroll = function() {

    var navbar = document.getElementById("navbar");
    var navbar_logo = document.getElementById("navbar-logo");
    var body = document.body;
    var doc = document.documentElement;

    doc = (doc.clientHeight) ? doc : body;

    if (doc.scrollTop == 0) {
        navbar_logo.src = "/assets/images/logo-dark.png";
        navbar.classList.remove('body-scrolled');
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('navbar-light');
        navbar.classList.add('navbar-dark');
    } else {
        navbar_logo.src = "/assets/images/logo.png";
        navbar.classList.remove('navbar-dark');
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('navbar-light');
        navbar.classList.add('body-scrolled');
    }
};

$(function(){

    console.log("test");

    new Swiper ('.swiper-container', {
        autoplay: 3000,
        speed: 1000,
        loop: true,
        slidesPerView: 2,
        spaceBetween: 0,
        breakpoints: {
            // when window width is <= 640px
            480: {
                slidesPerView: 1
            }
        }
    })

    $('.modal ').insertAfter($('body'));

});

