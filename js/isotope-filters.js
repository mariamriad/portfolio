jQuery(function ($) {

var $container = $('#isotope-list'); //The ID for the list with all the blog posts
$container.isotope({ //Isotope options, 'item' matches the class in the PHP
	itemSelector : '.item',
		layoutMode : 'masonry'
});

// Imagesloaded Function
$container.imagesLoaded().progress( function(){
	$container.isotope('layout');
})

// Filtering function
$('#filters a').on('click', function(){
	// console.log("test");
		  if ($(this).hasClass('selected')){
		      $(this).removeClass('selected');
		      $container.isotope( { filter: '*'} );
		  }else{
		      $('#filters a').removeClass('selected');
		      const filterValue = $(this).attr('data-filter');
		      $container.isotope({ filter: filterValue });
		      $(this).addClass('selected');
		  }
		});

});
