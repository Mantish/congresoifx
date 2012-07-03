/* Author: Orman Clark
Name: sildes.js
*/
$(function(){

    var loading_img = $('body').attr('data-themeurl') + '/img/loading.gif';

	$('#slides').slides({
		preload: true,
		preloadImage: loading_img,
		play: 5500,
		pause: 3000,
		hoverPause: true

	});
});

/* Author: bxCreative
Name: bxSlider-jQuery HTML Content Slider
*/

$(function(){
  $('#slider1').bxSlider({
    displaySlideQty: 3,
    moveSlideQty: 1
  });
});


/* Author: @thefancyapps
Name: fancybox
*/
$(function(){
		$(".fancybox").fancybox();
});



/* Author: danielstocks
Name: jQuery-Collapse
*/
$(".acordeon").collapse({show: function(){
                    this.animate({
                        opacity: 'toggle',
                        height: 'toggle'
                    }, 300);
                },
                hide : function() {

                    this.animate({
                        opacity: 'toggle',
                        height: 'toggle'
                    }, 300);
                }
            });

