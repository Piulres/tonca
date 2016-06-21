$( document ).ready(function() {
	$('.isotope-grid').isotope({
	  itemSelector: '.isotope-grid-item',
	  masonry: {
	    isFitWidth: true
	  }
	});

	// init Isotope
	var $grid = $('.isotope-grid').isotope({
	  itemSelector: '.isotope-grid-item'
	});

	// store filter for each group
	var filters = {};

	$('.filters').on( 'click', '.button', function() {
	  var $this = $(this);
	  // get group key
	  var $buttonGroup = $this.parents('.button-group');
	  var filterGroup = $buttonGroup.attr('data-filter-group');
	  // set filter for group
	  filters[ filterGroup ] = $this.attr('data-filter');
	  // combine filters
	  var filterValue = concatValues( filters );
	  // set filter for Isotope
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
	  
	// flatten object by concatting values
	function concatValues( obj ) {
	  var value = '';
	  for ( var prop in obj ) {
	    value += obj[ prop ];
	  }
	  return value;
	}

});