document.addEventListener("DOMContentLoaded", function () {
    function initializeSwiper(containerSelector, options = {}) {
        return new Swiper(containerSelector, {
            loop: options.loop || false,
            pagination: {
                el: options.paginationEl || ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: options.nextEl || ".swiper-button-next",
                prevEl: options.prevEl || ".swiper-button-prev",
            },
            slidesPerView: options.slidesPerView || "auto",
            centeredSlides: options.centeredSlides || false,
            effect: options.effect || "slide",
            creativeEffect: options.creativeEffect || {},
            spaceBetween: options.spaceBetween || 10,
            ...options.additionalOptions,
        });
    }

    initializeSwiper(".swiper-container-instructors", {
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
        paginationEl: ".instructors-pagination",
        nextEl: ".instructors-next",
        prevEl: ".instructors-prev",
        additionalOptions: {
            allowTouchMove: false,
            autoplay: {
                delay: 3000,
            },
        },
    });

    initializeSwiper(".swiper-container-products", {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true,
        loopFillGroupWithBlank: true,
        centeredSlides: "auto",

        paginationEl: ".products-pagination",
        nextEl: ".products-next",
        prevEl: ".products-prev",
    });

    initializeSwiper(".swiper-container-reviews", {
        slidesPerView: 1,
        spaceBetween: 80,
        effect: "coverflow",
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        paginationEl: ".reviews-pagination",
        nextEl: ".reviews-next",
        prevEl: ".reviews-prev",
        additionalOptions: {
            allowTouchMove: false,
        },
    });
});
