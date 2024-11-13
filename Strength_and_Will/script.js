// Получаем элементы
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];

// Открытие модального окна при нажатии на кнопку
btn.onclick = function() {
    modal.style.display = "block";
}

// Закрытие модального окна при нажатии на крестик
span.onclick = function() {
    modal.style.display = "none";
}

// Закрытие модального окна при нажатии вне окна
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


let currentIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const indicators = document.querySelectorAll('.indicator');

function goToSlide(index) {
    if (index < 0) {
        index = carouselItems.length - 1;
    } else if (index >= carouselItems.length) {
        index = 0;
    }
    currentIndex = index;
    document.querySelector('.carousel-inner').style.transform = `translateX(-${currentIndex * 100}%)`;
    
    // Обновляем индикаторы
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === currentIndex);
    });
}

function goToNextSlide() {
    goToSlide(currentIndex + 1);
}

function goToPrevSlide() {
    goToSlide(currentIndex - 1);
}

setInterval(goToNextSlide, 5000);





