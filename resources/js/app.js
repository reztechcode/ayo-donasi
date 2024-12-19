import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000, // waktu peralihan slide dalam milidetik
            disableOnInteraction: false, // agar autoplay tetap berjalan meskipun ada interaksi
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
