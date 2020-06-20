import '../scss/new_home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
var mySwiperInit = new Swiper('.init .swiper-container', {
    speed: 400,
    loop: true,
    pagination: {
        el: '.init .swiper-pagination',
        clickable: true
    },
    slidesPerView: 1,
    autoplay: {
        delay: 7500
    }
});
var mySwiperInit = new Swiper('.testimonios', {
    speed: 400,
    loop: true,
    pagination: {
        el: '.testimonios .swiper-pagination',
        clickable: true
    },
    slidesPerView: 'auto'
});