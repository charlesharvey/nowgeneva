(function ($, root, undefined) {

	$(function () {

		'use strict';


		console.log('scripts working !');


				var $site_nav = $('#site_nav');
				var $open_nav = $('#open_nav');

				$open_nav.on('click', function(){

					$site_nav.toggleClass('menu_visible');

				});

				// if press escape key, hide menu
				$(document).on('keydown', function(e){

					if(e.keyCode == 27 ){
						$site_nav.removeClass('menu_visible');

				 		$('.search_box').removeClass('visible');
					}

				})


	});

})(jQuery, this);
