import imagesLoaded from 'imagesloaded';
import isotope from 'isotope-layout';


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if ($('body').is('.post-type-archive-zimmer')) {
      const grid = new isotope( '.grid-rooms', {
        // options
        itemSelector: '.card',
        percentPosition: true,
        layoutMode: 'fitRows',
      });
      imagesLoaded(grid.element).on('progress', function() {
        grid.layout();
      });
  
      // filter items on button click
      $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        grid.arrange({filter: filterValue});
      });
  
      // change is-checked class on buttons
      $('.filter-button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function( event ) {
          $buttonGroup.find('.is-checked').removeClass('is-checked');

          $(this).addClass('is-checked');
        });
      });
		}

	}, false);
});