import { lenis } from './gsap.js';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if ($(window).width() <= 1024) {
      let buffer = 200; // change this to the amount of px you want the user to scroll before the sidebar moves

      let lastScrollTop = 0; // to keep track of the last scroll position
      
      lenis.on("scroll", () => {
      
        let goesTo = lenis.animate.to;
        let goesFrom = lenis.animate.from;
        let current = lenis.animatedScroll;
      
        //console.log(current);
      
        if (goesFrom < buffer && goesTo >= buffer) {
          // The user scrolled down from a position less than the buffer to a position greater than or equal to the buffer
          $("#header-main").css('top', "-100%");
        } else if (goesFrom >= buffer && goesTo < buffer) {
          // The user scrolled up from a position greater than or equal to the buffer to a position less than the buffer
          $("#header-main").css('top', "0");
        } else if (goesTo < lastScrollTop) {
          // The user scrolled up
          $("#header-main").css('top', "0");
        } else if (goesTo > lastScrollTop && goesTo > buffer) {
          // The user scrolled down from a position greater than the buffer
          $("#header-main").css('top', "-100%");
        }
      
        // Update the last scroll position
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