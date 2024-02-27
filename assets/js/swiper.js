import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if (document.body.classList.contains("page-template-page-home")) {
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