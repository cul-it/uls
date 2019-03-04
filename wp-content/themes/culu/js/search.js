/**
 *
 */
 (function ($, root, undefined) {

	$(function () {

		// DOM ready, take it away
		$('.icon-search').click(function(e){
      $(' form.user-tool-search ').css( 'display', 'grid' );
			//console.log('click');
			e.preventDefault();
			$(' form.user-tool-search ').slideDown();

		});

		$(' .btn-close-search  ').click(function(e){

			e.preventDefault();
      $(' form.user-tool-search ').slideUp();

		});


			/////////////////////////////
			// Home search filter
			// Toggle filter select list
			 var $searchFilterList = $('#filter-search-nav');
			 var $isFilterOpen = false;

			 $('div.filter-search').click(function(e) {
					 e.preventDefault();
					 //console.log('up');

					 if (!$isFilterOpen) {

							 //Change button filter state to selected
							 $(this).find('span').removeClass('filter-default');
							 $(this).find('span').addClass('filter-active');

							 //Reveal filter select list
							 $searchFilterList.css('display','block');
							 $isFilterOpen = true;

					 } else {
							 //Change button filter state to default
							 $(this).find('span').removeClass('filter-active');
							 $(this).find('span').addClass('filter-default');

							 //Hide filter select list
							 $searchFilterList.css('display','none');
							 $isFilterOpen = false;

					 }
			});

			 /////////////////////////////
			 // Collect users' selection
			 //
			 //
					var $selectedFilter = "Catalog";

				 $('#filter-search-nav li').each(function(index){
						 $(this).click(function(ev){

								ev.preventDefault();

								//console.log($(this).text());
								//Selected filter feedback
								$('.search-filter-selected').text($(this).text()).fadeIn('slow');
								$('input[name="classgroup"]').val('');

								$('.filter-search .active').text($(this).text());

								$selectedFilter = $(this).text();

								 //Hide filter select list
								 //$searchFilterList.addClass('filter-default');

								 //console.log($searchFilterList);

								 //Change button filter state to default
								 $('a.filter-search').removeClass('filter-active');
								 $('a.filter-search').addClass('filter-default');

								 $isFilterOpen = false;


						 });

				 });

				 //When focus, hide filter select list and change filter button state to default
				 $('input.search-homepage').focus(function(){

						 $('input.search-homepage').attr("value","");
						 $('input.search-homepage').css({
								 'text-align' : 'left',
								 'opacity' : 1
						 });

						 if (!$isFilterOpen) {

								 $isFilterOpen = false;

						 }else {

									//Hide filter select list
											$('#filter-search-nav').hide();

											//Change button filter state to default
											$('div.filter-search').find('span').removeClass('filter-active');
											$('div.filter-search').find('span').addClass('filter-default');

											$isFilterOpen = false;
							 }

				 });

				 $( '#search' ).submit(function(e) {

						//var send = $('.search-homepage').val() + '    ' + $selectedFilter;
						//console.log(send);

						switch ($selectedFilter) {

									case 'Catalog':
											$('input.search-homepage').attr("name",'q');
											$(this).attr("action", 'https://newcatalog.library.cornell.edu/search?q=');
											break;

									case 'Hotel website':
											$('input.search-homepage').attr("name",'s');
											//$(this).attr("action", 'http://hotel.library.cornell.edu/' + '?s=');
											$(this).attr("action", 'http:' + '?s=');

											/*if (window.location.hostname == 'localhost') {
												$(this).attr("action", 'http://vet.library.cornell.edu/' + '?s=');
												break;
											} else {
												(this).attr("action", 'http://dev-veterinary-library.pantheonsite.io/' + '?s=');
												break;
											}*/
							}
					});

	});


})(jQuery, this);
