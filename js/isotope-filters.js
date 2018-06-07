jQuery(function ($) {

	const $container = $('#isotope-list'); //The ID for the list with all the blog posts
	$container.isotope({ //Isotope options, 'item' matches the class in the PHP
		itemSelector : '.item',
  		layoutMode : 'masonry'
	});

    //Filtering function
    $('#filters a').on('click', function(){
			// console.log("test");
        if ( $(this).hasClass('selected')){
            $(this).removeClass('selected');
            $container.isotope( { filter: '*'} );
        } else {
            $('#filters a').removeClass('selected');
            const filterValue = $(this).attr('data-filter');
            $container.isotope({ filter: filterValue });
            $(this).addClass('selected');
        }
    });

});
