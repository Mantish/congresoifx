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
