// script.js
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('mobile-menu');
    const nav = document.querySelector('nav');

    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        nav.classList.toggle('active');
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function (item) {
        item.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    });
});
