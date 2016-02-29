/*----------------------------------------------------------------------------
  Main JS Script(s)
----------------------------------------------------------------------------*/
var $ = jQuery;

var scrollTo = function(){
  $('html, body').animate({
      scrollTop: $this.offset().top
  }, 500);
}

var jobMarketFilter = function(){
  if ( window.location.href.indexOf("?#netJava") > -1 ) {
    $this = $('#netJava');
  } else if( window.location.href.indexOf("?#softwareDevManager") > -1 ){
    $this = $('#softwareDevManager');
  } else if( window.location.href.indexOf("?#webDeveloper") > -1 ){
    $this = $('#webDeveloper');
  } else if( window.location.href.indexOf("?#networkEngineer") > -1 ){
    $this = $('#networkEngineer');
  } else if( window.location.href.indexOf("?#systemsAdmin") > -1 ){
    $this = $('#systemsAdmin');
  } else if( window.location.href.indexOf("?#endUserSupport") > -1 ){
    $this = $('#endUserSupport');
  } else if( window.location.href.indexOf("?#businessAnalyst") > -1 ){
    $this = $('#businessAnalyst');
  } else if( window.location.href.indexOf("?#projectManager") > -1 ){
    $this = $('#projectManager');
  } else if( window.location.href.indexOf("?#systemsEngineer") > -1 ){
    $this = $('#systemsEngineer');
  } else if( window.location.href.indexOf("?#qaAnalyst") > -1 ){
    $this = $('#qaAnalyst');
  } else if( window.location.href.indexOf("?#databaseManager") > -1 ){
    $this = $('#databaseManager');
  } else if( window.location.href.indexOf("?#BIDevelopers") > -1 ){
    $this = $('#BIDevelopers');
  } else if( window.location.href.indexOf("?#networkAdministratorVoIP") > -1 ){
    $this = $('#networkAdministratorVoIP');
  } else if( window.location.href.indexOf("?#phpDeveloper") > -1 ){
    $this = $('#phpDeveloper');
  } else if( window.location.href.indexOf("?#pythonDeveloper") > -1 ){
    $this = $('#pythonDeveloper');
  } else if( window.location.href.indexOf("?#systemsSpecialist") > -1 ){
    $this = $('#systemsSpecialist');
  }
};

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
