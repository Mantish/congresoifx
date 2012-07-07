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
			$('#tabs-wrap .page').hide();
			var activeTab = $('#paginador li.active a').attr("href");
			$(activeTab).show();

			$('aside').on('click', '#paginador li:not(.active) a', changeTab);
		}

		init();
	}

	$(function(){
		new $.fn.tabsnav();
	});
})(jQuery);
