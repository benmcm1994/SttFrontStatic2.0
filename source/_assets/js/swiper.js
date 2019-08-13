var mySwiper = new Swiper ('.swiper-container', {
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
});