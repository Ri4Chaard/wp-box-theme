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

    // Обновление позиции слайдера
    function updateSliderPosition() {
        postSlider.style.transform = `translateX(-${currentIndex * 100}%)`;

        // Обновляем текст индекса
        slideIndex.textContent = `${currentIndex + 1} из ${slides.length}`;

        // Отключаем кнопки на первом и последнем слайдах
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === slides.length - 1;
    }

    // Обработчик кнопки "Предыдущий"
    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSliderPosition();
        }
    });

    // Обработчик кнопки "Следующий"
    nextBtn.addEventListener("click", () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateSliderPosition();
        }
    });

    // Инициализация слайдера
    updateSliderPosition();
});
