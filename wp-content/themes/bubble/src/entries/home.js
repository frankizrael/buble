import '../scss/home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';


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

var swiperTestimoniosContent= new Swiper('.ventajas_slider', {
    slidesPerView: 1,
    on: {
        slideChangeTransitionStart: function(){
            swiperTestimoniosImages.slideTo(swiperTestimoniosContent.activeIndex);
        }
    }
});
var swiperTestimoniosImages = new Swiper('.ventajas_slider_images', {
    slidesPerView: 1,
    pagination: {
        el: '.ventajas_slider_images .swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 7500
    },
    on: {
        slideChangeTransitionStart: function(){
            swiperTestimoniosContent.slideTo(swiperTestimoniosImages.activeIndex);
        }
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




