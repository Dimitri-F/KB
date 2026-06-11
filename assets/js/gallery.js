const carousel = document.querySelector('.gallery-carousel');

const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

function getSlideWidth() {

    const slide = document.querySelector('.gallery-slide');

    const gap = 30;

    return slide.offsetWidth + gap;
}

nextBtn.addEventListener('click', () => {

    carousel.scrollBy({
        left: getSlideWidth(),
        behavior: 'smooth'
    });

});

prevBtn.addEventListener('click', () => {

    carousel.scrollBy({
        left: -getSlideWidth(),
        behavior: 'smooth'
    });

});