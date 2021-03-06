/*----------------------------------------------------------------------------
  Main JS Script(s)
----------------------------------------------------------------------------*/
var $ = jQuery;

// On Document Ready
jQuery(document).ready(function($) {

  // Initialize Foundation
  $(document).foundation();

  // Equalize elements via matchHeight
  $('.job-item').matchHeight();
  $('.value-item').matchHeight();
  $('.careers div div').matchHeight();
  $('.career-list li').matchHeight();

  // Nifty Nav Adjustments
  $('.nifty-panel .menu li.menu-item-95 > a').attr('href', '#');

  // Homepage Career Search
  $('#career-toggle').on('click', function(){
    $('.career-list').slideToggle(300);
  });

});
