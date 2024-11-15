document.addEventListener("DOMContentLoaded", function () {
    function initializeSwiper(containerSelector, options = {}) {
        return new Swiper(containerSelector, {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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
        slidesPerView: "auto",
        centeredSlides: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-120%", 0, -500],
            },
            next: {
                shadow: true,
                translate: ["120%", 0, -500],
            },
        },
    });

    initializeSwiper(".swiper-container-products", {
        slidesPerView: "auto",
        centeredSlides: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-120%", 0, -500],
            },
            next: {
                shadow: true,
                translate: ["120%", 0, -500],
            },
        },
    });
});
