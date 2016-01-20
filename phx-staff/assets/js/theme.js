/*----------------------------------------------------------------------------
  Main JS Script(s)
----------------------------------------------------------------------------*/
jQuery(document).ready(function($) {


  // Initialize Foundation
  $(document).foundation();

  // Equalize elements via matchHeight
  $('.job-item').matchHeight();
  $('.value-item').matchHeight();
  $('.career-search').matchHeight();

  // Nifty Nav Adjustments
  $('.nifty-panel .menu li.menu-item-95 a').attr('href', '#');
});
