import { lenis } from './gsap.js';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if ($(window).width() <= 1024 && typeof lenis !== 'undefined') {
        let buffer = 200;
        let lastScrollTop = 0;
    
        lenis.on("scroll", () => {
            let goesTo = lenis.animate.to;
            let goesFrom = lenis.animate.from;
            let current = lenis.animatedScroll;
    
            if (goesFrom < buffer && goesTo >= buffer) {
                $("#header-main").css('top', "-100%");
            } else if (goesFrom >= buffer && goesTo < buffer) {
                $("#header-main").css('top', "0");
            } else if (goesTo < lastScrollTop) {
                $("#header-main").css('top', "0");
            } else if (goesTo > lastScrollTop && goesTo > buffer) {
                $("#header-main").css('top', "-100%");
            }
    
            lastScrollTop = goesTo;
        });
    }

    $(window).on('resize', function() {
      if ($(window).width() > 1024) {
        $("#header-main").css('top', "0");
      }
    });
    

    /* Hamburguer toggle */
    const $toggleBtn = $('.mobile-menu-toggle')
    $toggleBtn.on('click', (e) => {
      $('#header-main').toggleClass('mobile-menu-open');
      
      // Check if the mobile menu is open
      if ($('#header-main').hasClass('mobile-menu-open')) {
        // If the mobile menu is open, prevent scrolling
        $('body').css('overflow', 'hidden');
      } else {
        // If the mobile menu is closed, allow scrolling
        $('body').css('overflow', 'auto');
      }

      $('.menu-wrapper').slideToggle(300);
    });


  }, false);
});