var mySwiper = new Swiper ('.swiper-container', {
    autoplay: 3000,
    observer: true,
    speed: 1000,
    observeParents: true,
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