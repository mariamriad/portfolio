
// // Mariam portfolio filters
//   var jQuerygrid = jQuery('.portfolio').isotope({
//   getSortData: {
//     category: '[web-dev]', // value of attribute
//     category: '[design]', // value of attribute
//     category: '[wordpress]', // value of attribute
//     category: '[ux]', // value of attribute
//     category: '[ia]', // value of attribute
//     category: '[branding]', // value of attribute
//   },
//     sortBy : ['web-dev'],
//     sortBy : ['design'],
//     sortBy : ['wordpress'],
//     sortBy : ['ux'],
//     sortBy : ['ia'],
//     sortBy : ['branding'],
// });
//
// // init Isotope
// var jQuerygrid = jQuerygrid.isotope({
//   getSortData: {
//     category: '[web-dev]', // value of attribute
//     category: '[design]', // value of attribute
//     category: '[wordpress]', // value of attribute
//     category: '[ux]', // value of attribute
//     category: '[ia]', // value of attribute
//     category: '[branding]', // value of attribute
//   }
// });
//
// // sort items on button click
// jQuery('.sort-by-button-group').on( 'click', 'button', function() {
//   var sortByValue = jQuery(this).attr('data-sort-by');
//   jQuerygrid.isotope({ sortBy: sortByValue });
// });
//
// }));

// external js: isotope.pkgd.js


// init Isotope
// var jQuerygrid = jQuery('.portfolio').isotope({
//   itemSelector: '.box',
//   layoutMode: 'fitRows',
//   getSortData: {
//     name: '.name',
//     symbol: '.symbol',
//     number: '.number parseInt',
//     category: '[data-category]',
//     weight: function( itemElem ) {
//       var weight = jQuery( itemElem ).find('.weight').text();
//       return parseFloat( weight.replace( /[\(\)]/g, '') );
//     }
//   }
// });
//
// // bind filter button click
// jQuery('#filters').on( 'click', 'button', function() {
//   var filterValue = jQuery( this ).attr('data-filter');
//   jQuerygrid.isotope({ filter: '*' });
//   jQuerygrid.isotope({ filter: 'web-dev' });
// });
//
//
// // change is-checked class on buttons
// jQuery('.button-group').each( function( i, buttonGroup ) {
//   var jQuerybuttonGroup = jQuery( buttonGroup );
//   jQuerybuttonGroup.on( 'click', 'button', function() {
//     jQuerybuttonGroup.find('.is-checked').removeClass('is-checked');
//     jQuery( this ).addClass('is-checked');
//   });
// });

jQuery(function ($) {

	var $container = $('#isotope-list'); //The ID for the list with all the blog posts
	$container.isotope({ //Isotope options, 'item' matches the class in the PHP
		itemSelector : '.item', 
  		layoutMode : 'masonry'
	});

	//Add the class selected to the item that is clicked, and remove from the others
	var $optionSets = $('#filters'),
	$optionLinks = $optionSets.find('a');

	$optionLinks.click(function(){
	var $this = $(this);
	// don't proceed if already selected
	if ( $this.hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('#filters');
	$optionSets.find('.selected').removeClass('selected');
	$this.addClass('selected');

	//When an item is clicked, sort the items.
	 var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });

	return false;
	});

});
