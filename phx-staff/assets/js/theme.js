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

  // expand the mobile nav
  $( '.nifty-panel .menu-item-has-children > a' ).on( 'click',
    function( e ) {
      e.preventDefault();
      // $( this ).parent().children( '.fa' ).toggleClass( 'active' );
      $( this ).parent().children( '.sub-menu' ).toggleClass( 'expand' );
    } );


});
