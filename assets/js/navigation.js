// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    //hide and show navigation on scroll
    var prevScrollpos = window.scrollY;
    var scrolled = false; // Flag to track if user has scrolled
    
    // You can set buffer to the desired distance from the top
    var buffer = 100;
    
    // Function to handle scroll behavior
    function handleScroll() {
      var currentScrollPos = window.scrollY;
    
      // Check if the viewport width is 1024px or less
      if ($(window).width() <= 1024) {
        // Check if the user has scrolled for the first time
        if (!scrolled) {
          // Update flag to indicate user has scrolled for the first time
          scrolled = true;
          return; // Exit the function without hiding the navigation bar
        }
    
        // Check if the user has scrolled a certain distance away from the top
        if (currentScrollPos > buffer) {
          if (prevScrollpos > currentScrollPos) {
            $("#header-main").css('top', '0');
          } else {
            $("#header-main").css('top', '-100%');
          }
          prevScrollpos = currentScrollPos;
        }
      }
    }
    
    // Attach scroll event listener
    $(window).on('scroll', handleScroll);
    
    // Attach resize event listener
    $(window).on('resize', function() {
      // Call handleScroll function on window resize
      handleScroll();
    });
    
    

    

    /* Hamburguer toogle */ 
    const $toggleBtn = $('.mobile-menu-toggle')

    $toggleBtn.on('click', (e) => {
      $('#header-main').toggleClass('mobile-menu-open');
      //$('body').toggleClass('mega-menu-open');
      $('.menu-wrapper').slideToggle(300);
    });

  }, false);
});