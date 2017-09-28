import bxslider from '../node_modules/bxslider/dist/jquery.bxslider.min';


(function ($, root, undefined) {

	$(function () {

		'use strict';





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



                // slider
                    $('.bxslider').bxSlider({
                         pagerCustom: '#bx-pager',
                         adaptiveHeight: false,
                    });

                // end of slider






                // MAP
                if (typeof location_address != 'undefined' && location_address != '' ) {


                            var map_theme = [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}];

                            var map_options = {
                                zoom: 14,
                                mapTypeControl: true,
                                scrollwheel: false,
                                draggable: true,
                                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                            //    styles: map_theme
                            };


                            var location_map_container = $('#map_container');
                            location_map_container.css({
                                width : '100%'
                            })

                            var location_map = new google.maps.Map(location_map_container.get(0), map_options);
                            // var infowindow = new google.maps.InfoWindow({content: ''});
                            var geocoder = new google.maps.Geocoder();

                            codeAddress(location_address, location_map);


                        }; // END  IF location_address

                // END OF MAP


                function codeAddress(address,map) {

                    geocoder.geocode( { 'address': address}, function(results, status) {
                      if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                      } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                      }
                    });
                  }

	});

})(jQuery, this);
