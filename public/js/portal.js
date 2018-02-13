/**
 * @file This is my cool script.
 * @copyright Jordan Davila 2018
 */

/**
 * Removes a class with a delay.
 * @param  {string} elementVar [description]
 * @param  {string} className  [description]
 * @param  {int} delay      [description]
 */
function removeClassDelay(elementVar, className, delay){
  $(elementVar).delay(delay).queue(function(next){
    $(this).removeClass(className);
  });
}

function removeClassDelayObj(obj, className, delay){
  obj.delay(delay).queue(function(next){
    $(this).removeClass(className);
  });
}

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

  // progressbar.js@1.0.0 version is used
  // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

  var bar = new ProgressBar.Circle(progress_circle, {
    strokeWidth: 6,
    easing: 'easeInOut',
    duration: 1400,
    color: '#e43f48',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null,
    step: function(state, circle) {
    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value + '%');
    }
  }
  });

  bar.animate(0.73);  // Number from 0.0 to 1.0

  var total_credits_bar = new ProgressBar.Line(total_credits, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#ff9547',
      trailColor: '#eee',
      trailWidth: 1,
      svgStyle: {width: '100%', height: '100%'},
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: '#999',
          position: 'absolute',
          left: '0',
          top: '30px',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {color: '#FFEA82'},
      to: {color: '#ED6A5A'},
      step: (state, total_credits_bar) => {
        total_credits_bar.setText('Total Credits: ' + Math.round(bar.value() * 100) + ' %');
      }
    });

    total_credits_bar.animate(0.65);

    var total_credits_school_bar = new ProgressBar.Line(total_credits_school, {
        strokeWidth: 4,
        easing: 'easeInOut',
        duration: 1400,
        color: '#ff9547',
        trailColor: '#eee',
        trailWidth: 1,
        svgStyle: {width: '100%', height: '100%'},
        text: {
          style: {
            // Text color.
            // Default: same as stroke color (options.color)
            color: '#999',
            position: 'absolute',
            left: '0',
            top: '30px',
            padding: 0,
            margin: 0,
            transform: null
          },
          autoStyleContainer: false
        },
        from: {color: '#FFEA82'},
        to: {color: '#ED6A5A'},
        step: (state, total_credits_school_bar) => {
          total_credits_school_bar.setText('School Credits: ' + Math.round(bar.value() * 100) + ' %');
        }
      });

      total_credits_school_bar.animate(0.68);

})
