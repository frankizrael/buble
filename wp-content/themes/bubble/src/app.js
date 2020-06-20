// Import styles
import './scss/app.scss';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/css/fontawesome.min.css';
// Import scripts
import TweenMax from "gsap/TweenMax";
import CSSPlugin from "gsap/CSSPlugin";
import TweenLite from "gsap/TweenLite";
//header
	$(window).scroll(function(){
		let mytop = $(window).scrollTop();	
		if (mytop > 20){
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
	});
//another ios
	var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	if (iOS) {
	 	//
	}
//scroll
	$('.btnanchor').on('click', function(event){
      	event.preventDefault();
      	let $this = $(this);
      	let href = $this.attr('href');
      	$('html, body').stop().animate({scrollTop: $(href).offset().top - 73}, 800);
 	});
	
//buttons
	$('.menu-icon').on('click', function(event){
      	$('body').toggleClass('menuOpen');
 	});	
//forms input
	$('.presentations').on('click', function(event){
      	$('.initfullContent').toggleClass('active');
      	$('.fullContent_inside').removeClass('active');
      	$('.presentations').toggleClass('active');
      	$('header').toggleClass('fixhead');
 	});	
 	$('.fullContent').on('click', function(event){
      	$('.fullContent_inside').addClass('active');
      	let $this = $(this);
      	let data = $this.attr('data');
      	$('.d_banner').hide();
      	$(data).show();
 	});	
 	$('.d_bannerjs_gel .true_fragancias a').on('click',function(e){
    e.preventDefault();
    let $this = $(this);
    let id = $this.attr('href');
    let data = $this.attr('data');
    $('.d_bannerjs_gel .d_banner--about').addClass('left');
    $('.d_bannerjs_gel .fragancias_hide').removeClass('show');
    $(id).addClass('show');
    $('.d_bannerjs_gel .ress').removeClass('show');
    $(data).addClass('show');
    $('.d_bannerjs_gel .ress_init').removeClass('ress_fb');
});


$('.d_bannerjs_jabon .true_fragancias a').on('click',function(e){
    e.preventDefault();
    let $this = $(this);
    let id = $this.attr('href');
    let data = $this.attr('data');
    $('.d_bannerjs_jabon .d_banner--about').addClass('left');
    $('.d_bannerjs_jabon .fragancias_hide').removeClass('show');
    $(id).addClass('show');
    $('.d_bannerjs_jabon .ress').removeClass('show');
    $(data).addClass('show');
    $('.d_bannerjs_jabon .ress_init').removeClass('ress_fb');
});


$('.d_bannerjs_jabon .back').on('click',function(e){
    e.preventDefault();
    $('.d_bannerjs_jabon .d_banner--about').removeClass('left');
    $('.d_bannerjs_jabon .fragancias_hide').removeClass('show');
    $('.d_bannerjs_jabon .ress').removeClass('show');
    $('.d_bannerjs_jabon .ress_init').addClass('ress_fb');
});
$('.d_bannerjs_gel .back2').on('click',function(e){
    e.preventDefault();
    $('.d_bannerjs_gel .d_banner--about').removeClass('left');
    $('.d_bannerjs_gel .fragancias_hide').removeClass('show');
    $('.d_bannerjs_gel .ress').removeClass('show');
    $('.d_bannerjs_gel .ress_init').addClass('ress_fb');
});

	
//preload animation
	(function() {
	    var lastTime = 0;
	    var vendors = ['ms', 'moz', 'webkit', 'o'];
	    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
	        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
	        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
	            || window[vendors[x]+'CancelRequestAnimationFrame'];
	    }  
	}());

	(function() {
	    var width, height, largeHeader, canvas, ctx, circles, target, animateHeader = true;
	    // Main
	    initHeader();
	    //addListeners();
	    function initHeader() {
	        width = window.innerWidth;
	        height = window.innerHeight;
	        target = {x: 0, y: height};
	        largeHeader = document.getElementById('burbuja');
	        largeHeader.style.height = height+'px';
	        canvas = document.getElementById('canvas');
	        canvas.width = width;
	        canvas.height = height;
	        ctx = canvas.getContext('2d');
	        // create particles
	        circles = [];
	        for(var x = 0; x < width*0.2; x++) {
	            var c = new Circle();
	            circles.push(c);
	        }
	        animate();
	    }
	    function animate() {
	        if(animateHeader) {
	            ctx.clearRect(0,0,width,height);
	            for(var i in circles) {
	                circles[i].draw();
	            }
	        }
	        requestAnimationFrame(animate);
	    }
	    // Canvas manipulation
	    function Circle() {
	        var _this = this;
	        // constructor
	        (function() {
	            _this.pos = {};
	            init();
	            //console.log(_this);
	        })();
	        function init() {
	            _this.pos.x = Math.random()*width;
	            _this.pos.y = height+Math.random()*120;
	            _this.alpha = 0.2+Math.random()*0.4;
	            _this.scale = 0.2+Math.random()*0.4;
	            _this.velocity = Math.random();
	        }
	        this.draw = function() {
	            if(_this.alpha <= 0) {
	                init();
	            }
	            _this.pos.y -= _this.velocity;
	            _this.alpha -= 0.0005;
	            ctx.beginPath();
	            ctx.arc(_this.pos.x, _this.pos.y, _this.scale*10, 0, 2 * Math.PI, false);
	            ctx.fillStyle = 'rgba(255,255,255,'+ _this.alpha+')';
	            ctx.fill();
	        };
	    }
	})();	

//credits
console.log("ღ Bubble ღ \n Dev con Amor por wampy para DigitalCook");