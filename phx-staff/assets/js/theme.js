/*----------------------------------------------------------------------------
  Main JS Script(s)
----------------------------------------------------------------------------*/
var $ = jQuery;

var jobMarketFilter = function(){
  if ( window.location.href.indexOf("?#netJava") > -1 ) {
    $('#netJava').show();
  } else if( window.location.href.indexOf("?#softwareDevManager") > -1 ){
    $('#softwareDevManager').show();
  } else if( window.location.href.indexOf("?#webDeveloper") > -1 ){
    $('#webDeveloper').show();
  } else if( window.location.href.indexOf("?#networkEngineer") > -1 ){
    $('#networkEngineer').show();
  } else if( window.location.href.indexOf("?#systemsAdmin") > -1 ){
    $('#systemsAdmin').show();
  } else if( window.location.href.indexOf("?#endUserSupport") > -1 ){
    $('#endUserSupport').show();
  } else if( window.location.href.indexOf("?#businessAnalyst") > -1 ){
    $('#businessAnalyst').show();
  } else if( window.location.href.indexOf("?#projectManager") > -1 ){
    $('#projectManager').show();
  } else if( window.location.href.indexOf("?#systemsEngineer") > -1 ){
    $('#systemsEngineer').show();
  } else if( window.location.href.indexOf("?#qaAnalyst") > -1 ){
    $('#qaAnalyst').show();
  } else if( window.location.href.indexOf("?#databaseManager") > -1 ){
    $('#databaseManager').show();
  } else if( window.location.href.indexOf("?#BIDevelopers") > -1 ){
    $('#BIDevelopers').show();
  } else if( window.location.href.indexOf("?#networkAdministratorVoIP") > -1 ){
    $('#networkAdministratorVoIP').show();
  } else if( window.location.href.indexOf("?#phpDeveloper") > -1 ){
    $('#phpDeveloper').show();
  } else if( window.location.href.indexOf("?#pythonDeveloper") > -1 ){
    $('#pythonDeveloper').show();
  } else if( window.location.href.indexOf("?#systemsSpecialist") > -1 ){
    $('#systemsSpecialist').show();
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
