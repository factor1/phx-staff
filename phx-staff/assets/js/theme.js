/*----------------------------------------------------------------------------
  Main JS Script(s)
----------------------------------------------------------------------------*/

var jobMarketFilter = function(){
  if ( window.location.href.indexOf("?#wordpressdeveloper") > -1 ) {
    $('#wordpressdeveloper').show();
  } else if( window.location.href.indexOf("?#iosdeveloper") > -1 ){
    $('#iosdeveloper').show();
  } else if( window.location.href.indexOf("?#designer") > -1 ){
    $('#designer').show();
  }
};

jobMarketFilter();

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
  $('.nifty-panel .menu li.menu-item-95 a').attr('href', '#');

  // Homepage Career Search
  $('#career-toggle').on('click', function(){
    $('.career-list').slideToggle(300);
  });

});
