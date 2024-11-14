document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper-container", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
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
