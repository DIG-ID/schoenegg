import Swiper from 'swiper/bundle';
import { gsap } from "gsap";
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if (document.body.classList.contains("page-template-page-home")) {
			let content = gsap.utils.toArray([".hero-swiper-subtitle",".hero-swiper-title", ".hero-swiper-btn" ]);
			let isTransitioning = false;
		
			var heroSwiper = new Swiper(".heroSwiper", {
				slidesPerView: 1,
				loop: true,
				speed: 800,
				simulateTouch: false,
				pagination: {
					el: ".swiper-pagination",
					dynamicBullets: true,
				},
				autoplay: {
					delay: 8000,
					disableOnInteraction: false,
				},
				on: {
					init: function () {
						gsap.set(content, { opacity: 0, y: 20 }); // Initial state
						isTransitioning = true;
						gsap.to(content, { opacity: 1, y: 0, duration: 0.3, stagger: 0.2 }); // Fade in on init
						setTimeout(function() {
							isTransitioning = false;
						}, 3000);
						setTimeout(function () {
							gsap.to(content, { opacity: 0, y: -20, duration: 0.5 }); // Fade out
						}, 6000);
					},
					slideChangeTransitionStart: function() {
						//gsap.to(content, { opacity: 0, y: -20, duration: 0.3 }); // Fade out before transition
					},
					slideChangeTransitionEnd: function() {
						isTransitioning = true;
						gsap.to(content, { opacity: 1, y: 0, duration: 0.3, stagger: 0.2 }); // Fade in after transition
						setTimeout(function() {
							isTransitioning = false;
						}, 3000);
						setTimeout(function () {
							gsap.to(content, { opacity: 0, y: -20, duration: 0.5 }); // Fade out
						}, 6000);
					}
				}
			});
		
			document.querySelector(".swiper-button-next").addEventListener("click", function() {
				if (!isTransitioning) {
					isTransitioning = true;
					gsap.to(content, { opacity: 0, y: -20, duration: 0.3 }); // Fade out before transition
					heroSwiper.autoplay.stop();
					setTimeout(function() {
						heroSwiper.slideNext();
						isTransitioning = false;
						heroSwiper.autoplay.start();
					}, 1500);
				}
			});
			document.querySelector(".swiper-button-prev").addEventListener("click", function() {
				if (!isTransitioning) {
					isTransitioning = true;
					gsap.to(content, { opacity: 0, y: -20, duration: 0.3 }); // Fade out before transition
					heroSwiper.autoplay.stop(); 
					setTimeout(function() {
						heroSwiper.slidePrev();
						isTransitioning = false;
						heroSwiper.autoplay.start(); 
					}, 1500); 
				}
			});

			var roomsSwiper = new Swiper(".roomsSwiper", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				// Responsive breakpoints
				breakpoints: {
					// when window width is >= 320px
					1024: {
						slidesPerView: 2,
						spaceBetween: 32
					}
				}
			});
			var testimonailsSwiper = new Swiper(".testimonialsSwiper", {
				loop: true,
				grabCursor: true,
				effect: "creative",
				creativeEffect: {
					prev: {
						shadow: true,
						translate: ["-20%", 0, -1],
					},
					next: {
						translate: ["100%", 0, 0],
					},
				},
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
		}

		if ($('.galleryHeroSwiper').length) {
			var galleryHeroSwiper = new Swiper(".galleryHeroSwiper", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
		}

		if ($('.galleryHeroSwiperLow').length) {
			var galleryHeroSwiperLow = new Swiper(".galleryHeroSwiperLow", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
		}


	}, false);
});