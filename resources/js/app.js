require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const popularSlide = new Swiper('.popular-slide', {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,

    },
    effect: true,
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    }
})
const rateSlide = new Swiper('.rated-slide', {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,

    },
    effect: true,
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 20,
        }
    }
})
const upcomingSlide = new Swiper('.upcoming-slide', {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,

    },
    effect: true,
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 20,
        }
    }
})
