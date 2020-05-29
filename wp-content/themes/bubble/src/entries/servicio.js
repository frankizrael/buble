import '../scss/servicio.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('.button .btn').on('click',function(){
	let $this = $(this);
	$this.closest('.self_form__init').find('.self_form__init__back').addClass('active');
});
$('.self_form__init .form__close').on('click',function(){
	let $this = $(this);
	$this.closest('.self_form__init').find('.self_form__init__back').removeClass('active');
});



var mySwiperInit = new Swiper('.cc_rr_content_img', {
    speed: 400,
    loop: true,
    pagination: {
        el: '.cc_rr_content_img .swiper-pagination',
        clickable: true
    },
    slidesPerView: 1,
    autoplay: {
        delay: 7500
    }
});