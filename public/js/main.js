/**
 * @file This is my cool script.
 * @copyright Jordan Davila 2018
 */

// Check Document ready before proceding

$(document).ready(function() {

  /**
   * Smooth Scroll Effect: Add a smooth scroll effect with hash (#)
   * links. Use html class 'scrollable' to any scrollable elementßß
   */

  $('.scrollable').on('click', 'a[href^="#"]', function(e) {
    e.preventDefault();
    $('.scrollable').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
  });

})
