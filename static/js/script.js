/* Author: Orman Clark 
Name: sildes.js
*/
$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
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
           

/*!
 *tabs
 */

(function($)
{
	$.fn.tabsnav = function()
	{
		var changeTab = function(e){
			e.preventDefault();

			$('#paginador li').removeClass("active");
			$(this).parent().addClass("active");

			var activeTab = $(this).attr("href");
			$('#tabs-wrap .page:visible').fadeOut( function() {
				$(activeTab).fadeIn();
			});
		}

		var init = function()
		{
			$('aside').on('click', '#paginador li:not(.active) a', changeTab);
		}

		init();
	}

	$(function(){
		new $.fn.tabsnav();
	});
})(jQuery);






		   
