function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

//Slider script
document.addEventListener("DOMContentLoaded", function () {
    const postSlider = document.getElementById("post-slider");
    const slides = document.querySelectorAll("#post-slider .slide");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    const slideIndex = document.getElementById("slide-index");
    let currentIndex = 0;

    function updateSliderPosition() {
        postSlider.style.transform = `translateX(-${currentIndex * 100}%)`;

        slideIndex.textContent = `${currentIndex + 1}/${slides.length}`;

        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === slides.length - 1;
    }

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSliderPosition();
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateSliderPosition();
        }
    });

    updateSliderPosition();
});

//Show questions
function toggleContent(button) {
    const content = button.nextElementSibling;
    const svgWrapper = button.querySelector("svg");

    content.classList.toggle("max-h-0");
    content.classList.toggle("opacity-0");
    content.classList.toggle("max-h-[1000px]");
    content.classList.toggle("opacity-100");

    svgWrapper.classList.toggle("rotate-45");
    svgWrapper.classList.toggle("rotate-0");
}
