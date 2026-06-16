
const burgerBtn = document.getElementById('burgerBtn');
const mobileMenu = document.getElementById('mobileMenu');


burgerBtn.addEventListener('click', () => {

    burgerBtn.classList.toggle('active');

    mobileMenu.classList.toggle('active');

    document.body.classList.toggle('menu-open');

});



