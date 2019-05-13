/**
 * Functionality for back to top
 *
 */

jQuery(document).ready(function($) {
	
	
	/**
	 * Show or hide back to top button.
	 */
	$()_window.scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.backtotop').fadeIn(200);
		} else {
			$('.backtotop').fadeOut(200);
		}
	})
	
	
	/**
	 * Animate scroll to top.
	 */
	$('.backtotop').click(function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 300);
	})
	
	
  	 	  		
});